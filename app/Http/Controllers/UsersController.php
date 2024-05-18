<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function dashboard(){
        $data = array();
        $data['pageTitle'] = 'Users Dashboard';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/dashboard', $data);
    }

    public function addresses(){
        $data = array();
        $data['pageTitle'] = 'Users addresses';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/users-addresses', $data);
    }
}
