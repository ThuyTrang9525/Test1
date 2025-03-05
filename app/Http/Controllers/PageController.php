<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   /**
     * Trang chủ
     */
    public function getIndex()
    {
        return view('page.homepage');
    }

    /**
     * Trang cửa hàng
     */
    public function getShop()
    {
        return view('page.shop');
    }

    /**
     * Trang chi tiết sản phẩm
     */
    public function getProductDetail()
    {
        return view('page.product-details');
    }

    /**
     * Trang đăng nhập
     */
    public function getLogin()
    {
        return view('page.login');
    }

    /**
     * Trang liên hệ
     */
    public function getContact()
    {
        return view('page.contact-us');
    }

    /**
     * Trang thanh toán
     */
    public function getCheckout()
    {
        return view('page.checkout');
    }

    /**
     * Trang giỏ hàng
     */
    public function getCart()
    {
        return view('page.cart');
    }

    /**
     * Trang blog
     */
    public function getBlog()
    {
        return view('page.blog');
    }

    /**
     * Trang blog chi tiết
     */
    public function getBlogSingle()
    {
        return view('page.blog-single');
    }
    public function getError()
    {
        return view('page.404');
    }
}
