<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Etc\Alerts;
use App;

class CarouselItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*------------------------------------*\
      # Carousel Item POST Actions
    \*------------------------------------*/

    public function delete(&$context, Request $request)
    {
        try {
            DB::beginTransaction();
            $carousel_item = App\CarouselItem::find($request->input('carousel_item'));
            $carousel_item->delete();
            DB::commit();
            $context['alert'] = new Alerts\SuccessAlert('Carousel Item deleted successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
    }

    public function update(&$context, Request $request)
    {
        try {
            static::updateCarouselItem($_POST['carousel_item_id'], null, null, $request->file('carousel_item_image'));
            $context['alert'] = new Alerts\SuccessAlert('Carousel item image updated successfully!');
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
        $context['display'] = ['carousel' => App\Carousel::find($_POST['carousel_id'])];
        $context['carousel_item_count'] = App\CarouselItem::maxOrd($context['display']['carousel']->id);
    }

    public function create(&$context, Request $request)
    {
        try {
            static::createCarouselItem(
                $request->input('carousel_item_title'),
                $request->input('carousel_id'),
                $request->file('carousel_item_image')
            );
            $context['alert'] = new Alerts\SuccessAlert('New Carousel Item added successfully!');
        } catch (\Exception $e) {
            $context['alert'] = new Alerts\DangerAlert($e->getMessage());
        }
        $context['display'] = ['carousel' => App\Carousel::find($_POST['carousel_id'])];
        $context['carousel_item_count'] = App\CarouselItem::maxOrd($context['display']['carousel']->id);
    }

    public function updateItems()
    {
        $data = [
            "response" => false
        ];
        if (!isset($_POST['items'])) {
            die(json_encode($data));
        }

        $items = json_decode($_POST['items'], true);
        foreach ($items as $item) {
            logger("UpdateItems", $item);
            if (!isset($item['id'], $item['title'], $item['order']))
                die(json_encode($data));
            static::updateCarouselItem($item['id'], $item['title'], $item['order']);
        }

        $data["response"] = true;
        $data["payload"] = json_encode($items);
        die(json_encode($data));
    }


    /*------------------------------------*\
      # Manager Methods
    \*------------------------------------*/

    public static function createOrderSelection($carousel_items, $current_id = NULL)
    {
        $text = 'Position 1 (At the beginning)';
        $order[$text] = 1;
        if ($carousel_items != NULL) {
            foreach ($carousel_items as $carousel_item) {
                $current_order = $carousel_item->ord + 1;
                if ($current_id != NULL && $current_id == $carousel_item->id) {
                    $text = 'Position ' . $current_order . ' (Current Position)';
                } else {
                    $text = 'Position ' . $current_order . ' (After ' . $carousel_item->title . ')';
                }

                $order[$text] = $current_order;
            }
        }
        return $order;
    }

    public static function createCarouselItem($title, $carousel_id, $image_upload)
    {
        $ord = App\CarouselItem::nextOrd($carousel_id);

        if (!$image_upload->isValid()) {
            throw new \Exception("Image Upload is invalid");
        }

        try {
            DB::beginTransaction();
            $carousel_item = App\CarouselItem::create([
                'title' => $title,
                'img_name' => $image_upload->store('carousel', 'uploads'),
                'carousel_id' => $carousel_id,
                'ord' => $ord
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

    public static function updateCarouselItem($id, $title = null, $ord = null, $image_upload = null)
    {
        $carousel_item = App\CarouselItem::find($id);
        try {
            $img_name = $carousel_item->img_name;
            if ($image_upload != null) {
                if (!$image_upload->isValid()) {
                    throw new \Exception("Image Upload is invalid");
                }
                $img_name = $image_upload->store('carousel', 'uploads');
            }
            DB::beginTransaction();
            $carousel_item->update([
                'title' => $title ?? $carousel_item->title,
                'ord' => $ord ?? $carousel_item->ord,
                'img_name' => $img_name
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}