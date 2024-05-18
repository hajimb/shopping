<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['pageTitle'] = 'Admin Dashboard';
        return view('admin/dashboard', $data);
    }

    public function dashboard2(){
        $data['pageTitle'] = 'Admin Dashboard 2';
        return view('admin/dashboard1', $data);
    }
}
