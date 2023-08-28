<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Etc\Alerts;
use App\Profile;
use App;

class ProfileController extends Controller
{

    use SubmissionTypes;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public $submission_types = [
        'lookup',
        'create',
        'update',
        'delete'
    ];

    public function get()
    {
        return $this->render();
    }

    public function post(Request $request)
    {
        $context = [];

        $action = $this->getSubmissionType($request);

        $this->{$action}($context, $request);

        return $this->render($context);
    }

    public function render($context = [])
    {
        try {
            $id = $context['id'] ?? null;
            $order = [];
            $profiles = static::fetchProfilePages($order, $id);
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
            throw $e;
        }

        $context['order'] = $order;
        $context['profiles'] = $profiles;

        return view('pages.admin.profiles', $context);
    }


    /*------------------------------------*\
      # Carousel POST Actions 
    \*------------------------------------*/

    public function lookup(array &$context, Request $request)
    {
        $id = $request->input('id');
        $context['id'] = $id;
        try {
            $displayProfile = Profile::find($id);
            $context['display'] = ['profile' => $displayProfile];
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function create(array &$context, Request $request)
    {
        try {
            DB::beginTransaction();
            static::createProfile(
                $request->input('name'),
                $request->input('title'),
                $request->input('content'),
                $request->input('page'),
                $request->input('order'),
                ($request->hasFile('image') ? $request->file('image') : null)
            );
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully added new profile!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function update(array &$context, Request $request)
    {
        try {
            DB::beginTransaction();
            static::updateProfile(
                $request->input('id'),
                $request->input('name'),
                $request->input('title'),
                $request->input('content'),
                $request->input('page'),
                $request->input('order'),
                ($request->hasFile('image') ? $request->file('image') : null)
            );
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully updated profile!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function delete(array &$context, Request $request)
    {
        try {
            DB::beginTransaction();
            static::deleteProfile($request->input('id'));
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Profile deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert('Profile could not be deleted.');
        }
    }


    /*------------------------------------*\
      # Client Manager Methods
    \*------------------------------------*/

    public static function allWithPageName($page_name)
    {
        return Profile::where('page', $page_name)->orderBy('ord', 'ASC')->get();
    }

    public static function fetchProfilePages(&$order = NULL, $current_id = NULL)
    {
        $profiles = [];

        $profiles['officers'] = static::allWithPageName('officers');
        $profiles['board-of-advisors'] = static::allWithPageName('board-of-advisors');
        $profiles['meet-our-team'] = static::allWithPageName('meet-our-team');

        if (is_array($order)) {
            $order['officers'] = [];
            $order['board-of-advisors'] = [];
            $order['meet-our-team'] = [];
            static::createOrderSelection($profiles['officers'], $order['officers'], $current_id);
            static::createOrderSelection($profiles['board-of-advisors'], $order['board-of-advisors'], $current_id);
            static::createOrderSelection($profiles['meet-our-team'], $order['meet-our-team'], $current_id);
        }

        return $profiles;
    }

    protected static function createOrderSelection($profiles, &$order, $current_id = NULL)
    {
        $largest_order = 0;
        if ($profiles != NULL) {
            foreach ($profiles as $profile) {
                if ($current_id != NULL && $current_id == $profile->id) {
                    $key = 'Position ' . $profile->ord . ' (Current Position)';
                } else {
                    if ($current_id == NULL) {
                        $key = 'Position ' . $profile->ord . ' (Before ' . $profile->name . ')';
                    } else {
                        $key = 'Position ' . $profile->ord;
                    }
                }

                $value = $profile->ord;
                $order[$key] = $value;
                if ($profile->ord > $largest_order) {
                    $largest_order = $profile->ord;
                }
            }
        }
        if ($current_id == null) {
            $key = 'Position ' . ($largest_order + 1) . ' (At the end)';
            $value = $largest_order + 1;
            $order[$key] = $value;
        }
    }

    public static function updateProfile($id, $new_name = null, $new_title = null, $new_content = null, $new_page = null, $new_order = null, $files_image = null)
    {
        // Get our profile, and a copy (for comparisons)
        $profile = Profile::find($id);

        // Check if we have a new image to upload
        $path_end = $profile->img_name;
        if ($files_image != null && $files_image->isValid()) {
            Storage::disk('uploads')->delete('profile/' . $profile->img_name);
            $path = $files_image->store('profile', 'uploads');
            $path_end = substr($path, strrpos($path, '/') + 1);
        }

        // If there is a new page or order, we need to fill the previous space and make room for the new placement
        if ($new_page != $profile->page || $new_order != $profile->ord) {
            Profile::orderFill($profile->page, $profile->ord);
            Profile::orderSplit($new_page, $new_order);
        }

        $profile->refresh();
        // Perform the actual update
        $profile->update([
            'name' => $new_name,
            'title' => $new_title,
            'content' => static::prepareContent($new_content),
            'img_name' => $path_end,
            'page' => $new_page,
            'ord' => $new_order
        ]);
    }

    public static function createProfile($name, $title, $content, $page, $order, $files_image)
    {
        // Handle image form data
        if ($files_image != null && $files_image->isValid()) {
            $path = $files_image->store('profile', 'uploads');
            $path_end = substr($path, strrpos($path, '/') + 1);
        }

        Profile::orderSplit($page, $order);

        $profile = Profile::create([
            'id' => NULL,
            'name' => $name,
            'title' => $title,
            'img_name' => $path_end,
            'content' => static::prepareContent($content),
            'page' => $page,
            'ord' => $order,
        ]);
    }

    public static function deleteProfile($id)
    {
        $profile = Profile::find($id);
        Storage::disk('uploads')->delete('profile/' . $profile->img_name);
        $profile->delete();
        Profile::orderFill($profile->page, $profile->ord);
    }

    public static function prepareContent($content)
    {
        // Need to remove unnecessary added div padding
        $contentLength = strlen($content);
        $searchLength = strlen('<div><br></div>');
        $search = substr($content, $contentLength - $searchLength);
        if ($search == '<div><br></div>') {
            $content = substr($content, 0, $contentLength - $searchLength) . substr($content, $contentLength + $searchLength);
        }

        // Need to wrap the content in the 'ql-render' class for viewing later
        $content = '<div class="ql-render">' . $content . '</div>';
        return $content;
    }
}