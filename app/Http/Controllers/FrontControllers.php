<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontControllers extends Controller
{
    public function index() {
        return view('index');
    }

    public function shop() {
        return view('shop');
    }

    public function cart() {
        return view('cart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function contact() {
        return view('contact');
    }

    public function produktract() {
        return view('produktract');
    }

    public function about() {
        return view('about');
    }
}
