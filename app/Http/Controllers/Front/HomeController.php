<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('front.home');
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
