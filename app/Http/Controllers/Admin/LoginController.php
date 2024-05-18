<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data['pageTitle'] = 'Admin Login';
        return view('admin/login', $data);
    }
}
