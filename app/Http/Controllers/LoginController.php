<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data = array();
        $data['pageTitle'] = 'Login';
        return view('frontend/login', $data);
    }
}
