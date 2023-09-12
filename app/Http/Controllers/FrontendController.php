<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\About;
use App\Models\Blog;
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

    public function index(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        $data['blog'] = Blog::orderBy('id','desc')->get();
       
        return view('frontend.about-us', $data);

}
