<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data['pageTitle'] = 'Blog';
        $data['bodyclass'] = 'product-page';
        return view('frontend/blog', $data);
    }

    public function detail(){
        $data['pageTitle'] = 'Blog';
        $data['bodyclass'] = 'product-page';
        return view('frontend/blog-detail', $data);
    }
}
