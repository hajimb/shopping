<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhishlistController extends Controller
{
    //
    public function index(){
        $data = array();
        $data['pageTitle'] = 'Whishlist';
        return view('frontend/whishlist', $data);
    }
}
