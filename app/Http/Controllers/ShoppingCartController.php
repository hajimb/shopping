<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    //
    public function cart(){
        $data = array();
        $data['pageTitle'] = 'Shopping Cart';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/shopping-cart', $data);
    }
}
