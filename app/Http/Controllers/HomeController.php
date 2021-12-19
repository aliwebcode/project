<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $settings = Setting::first();
        return view('home',compact('settings'));
    }
}
