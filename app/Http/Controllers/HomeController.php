<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend/home');
    }

    public function about(){
        return view('frontend/about-us');
    }

    public function contact(){
        return view('frontend/contact-us');
    }

    public function sitemap(){
        return view('frontend/sitemap');
    }

    public function grid(){
        $data['pageTitle'] = 'Grid';
        $data['bodyclass'] = 'category-page';
        return view('frontend/grid', $data);
    }


    public function list(){
        $data['pageTitle'] = 'list';
        $data['bodyclass'] = 'category-page';
        return view('frontend/list', $data);
    }

}
