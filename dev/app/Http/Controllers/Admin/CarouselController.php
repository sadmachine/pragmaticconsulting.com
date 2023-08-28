<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Etc\Alerts;
use App\Carousel;
use App;


class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->itemController = new CarouselItemController();
    }

    public function get()
    {
        return $this->render();
    }

    public function post(Request $request)
    {
        $context = [];

        if (isset($_POST['delete_carousel_item'])) {
            $this->itemController->delete($context, $request);
        } elseif (isset($_POST['update_carousel_item_image'])) {
            $this->itemController->update($context, $request);
        } elseif (isset($_POST['new_carousel_item'])) {
            $this->itemController->create($context, $request);
        } elseif (isset($_POST['lookup'])) {
            $this->lookup($context);
        } elseif (isset($_POST['update'])) {
            $this->update($context);
        } elseif (isset($_POST['new'])) {
            $this->create($context);
        } elseif (isset($_POST['delete'])) {
            $this->delete($context);
        }

        return $this->render($context);
    }

    public function render($context = [])
    {
        $context['carousels'] = App\Carousel::all();
        $used_pages = [];
        foreach ($context['carousels'] as $carousel) {
            $used_pages[] = $carousel->page_id;
        }
        $context['pages'] = App\Page::whereNotIn('id', $used_pages)->get();
        return view('pages.admin.carousels', $context);
    }


    /*------------------------------------*\
      # Carousel POST Actions 
    \*------------------------------------*/

    public function lookup(array &$context)
    {
        $context['display'] = ['carousel' => App\Carousel::find($_POST['carousel_id'])];
        $context['carousel_item_count'] = App\CarouselItem::maxOrd($context['display']['carousel']);
    }

    public function create(array &$context)
    {
        $pageId = $_POST['page'];
        try {
            DB::beginTransaction();
            Carousel::create(['page_id' => $pageId]);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully added carousel!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function update(array &$context)
    {
        $id = $_POST['carousel_id'];
        $pageId = $_POST['page'];
        try {
            DB::beginTransaction();
            Carousel::find($id)->update([
                'page_id' => $pageId
            ]);
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully updated carousel!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function delete(array &$context)
    {
        try {
            DB::beginTransaction();
            $id = $_POST['carousel_id'];
            $carousel = Carousel::find($id);
            $carousel->delete();
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Successfully deleted carousel!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }
}