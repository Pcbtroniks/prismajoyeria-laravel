<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Mail;

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

    public function seecontactemail(){
        return view('mail.contact');
    }

    public function sendContactEmail() {

        $data = request()->validate([
            'name' =>   'required',
            'phone'=>   'required',
            'city' =>   'required',
            'email'=>   'required',
            'budget'=>   'nullable',
            'materials'=>   'nullable',
            'message'=>   'nullable',
        ]);

        $sendTo = 'contacto@prismajoyeria.com';

        Mail::to($sendTo)->queue(new ContactRequest($data));

        return redirect()->back()->with('success','We have received your request.');
    }
}
