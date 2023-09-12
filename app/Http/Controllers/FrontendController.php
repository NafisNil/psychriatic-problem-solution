<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\About;
use App\Models\Blog;
use App\Models\Atiq;
use App\Models\Featuregame;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['blog'] = Blog::orderBy('id','desc')->get();
        $data['featuregame'] = Featuregame::orderBy('id','desc')->get();
        return view('frontend.index', $data);
    }

    public function about(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['blog'] = Blog::orderBy('id','desc')->get();
       
        return view('frontend.about-us', $data);
    }

    public function contact(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
       
        return view('frontend.contact-us', $data);
    }

    public function atiq(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['atiq'] = Atiq::first();
        return view('frontend.atiq-us', $data);
    }

    public function blog(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['blog'] = Blog::orderBy('id','desc')->get();
        return view('frontend.blog-all', $data);
    }

    public function single_blog($id){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['blog'] = Blog::where('id',$id)->first();
        return view('frontend.single-blog', $data);
    }
}
