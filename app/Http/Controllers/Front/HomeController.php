<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactRequest;
use App\Models\Image;
use App\Models\Instagram;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $images = Image::orderBy('sort_order', 'ASC')->get(['id','image_src', 'image_alt']);
        $instagramPosts = Instagram::getPosts();
        $instagramData = collect(json_decode($instagramPosts))['data'];
        $instagramPosts = (isset($instagramData) && count($instagramData) > 1) ? $instagramData  : null;
        return view('front.home', compact('images', 'instagramPosts'));
    }

    public function getInstagramData(){
        $data = Instagram::getPosts();
        return response($data);
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
