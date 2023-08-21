<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("frontend.pages.home");
    }
    public function shop(){
        return view("frontend.pages.shop");
    }
    public function about(){
        return view("frontend.pages.about");
    }
    public function blog(){
        return view("frontend.pages.blog");
    }
    public function contact(){
        return view("frontend.pages.contact");
    }
    public function account(){
        return view("frontend.pages.account");
    }
    public function checkout(){
        return view("frontend.pages.checkout");
    }
    public function error(){
        return view("frontend.pages.error");
    }
    public function singleblog(){
        return view("frontend.pages.singleblog");
    }
    public function individualProduct(){
        return view("frontend.pages.product_details");
    }
}
