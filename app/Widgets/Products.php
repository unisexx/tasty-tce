<?php

namespace App\Widgets;

use App\Product;
use Illuminate\Support\Str;
use TCG\Voyager\Widgets\BaseDimmer;

class Products extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Product::count();
        $string = 'รายการ';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tag',
            'title'  => "{$count} {$string}",
            'text'   => __('คุณมี ' . $count . ' รายการสินค้าอยู่ในระบบ สามารถคลิกที่ปุ่มด้านล่างเพื่อดูข้อมูล', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'ดูรายการสินค้าทั้งหมด',
                'link' => route('voyager.products.index'),
            ],
            'image'  => '/site-html/images/product-bg.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    // public function shouldBeDisplayed()
    // {
    //     return Auth::user()->can('browse', Voyager::model('Post'));
    // }
}
