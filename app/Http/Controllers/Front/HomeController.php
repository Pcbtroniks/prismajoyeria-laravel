<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;

class HomeController extends Controller
{
    public function index(){
        $images = Image::get(['image_src', 'image_alt']);
        return view('front.home', compact('images'));
    }

    public function AboutPage(){
        return view('front.about.about');
    }

    public function ContactPage(){
        return view('front.contact.contact');
    }

    public function PrivacyPage()
    {
        return view('front.legal.privacy');
    }

    public function SalePolicyPage()
    {
        return view('front.legal.sale-policy');
    }
}
