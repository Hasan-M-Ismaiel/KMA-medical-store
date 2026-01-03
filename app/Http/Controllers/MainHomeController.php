<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainHomeController extends Controller
{

    public function home(Request $request)
    {
        return view('main_home');
    }

    public function about_us(Request $request)
    {
        return view('about-us');
    }

    public function contact_us(Request $request)
    {
        return view('contact-us');
    }

    public function media(Request $request)
    {
        return view('media');
    }

}
