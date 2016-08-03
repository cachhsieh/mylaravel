<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class myController extends Controller {

    public function index() {
        return "首頁";
    }

    public function contact_us() {
        return "聯絡我們";
    }

    public function login() {
        return "登錄";
    }

    public function logout() {
        return "登出";
    }

    public function products() {
        return "產品";
    }

    public function products_category() {
        return "產品目錄";
    }
    
    public function products_brands() {
        return "品牌";
    }
    
    public function products_details($id) {
        return "牌品介紹 " . $id;
    }
    
    public function blog() {
        return "部落格";
    }

    public function blog_post($id) {
        return "部落格網址 " . $id;
    }
    
    public function search($key_word) {
        return "搜尋";
    }
    
    public function cart() {
        return "購物車";
    }
    
    public function checkout() {
        return "結帳";
    }
}
