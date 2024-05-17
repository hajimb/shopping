<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index(){
        $data['pageTitle'] = 'Blog';
        $data['bodyclass'] = 'checkout-page';
        return view('frontend/checkout', $data);
    }
}
