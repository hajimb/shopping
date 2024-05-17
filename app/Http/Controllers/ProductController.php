<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function detail(){
        $data = array();
        $data['pageTitle'] = 'Product Detail';
        $data['bodyclass'] = 'product-page';
        return view('frontend/product-detail', $data);
    }
}
