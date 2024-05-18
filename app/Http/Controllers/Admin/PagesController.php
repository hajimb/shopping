<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function starter(){
        $data['pageTitle'] = 'Starter Page';
        return view('admin.pages.starter', $data);
    }

    public function register(){
        $data['pageTitle'] = 'register Page';
        return view('admin.pages.register', $data);
    }

    public function logout(){
        $data['pageTitle'] = 'logout Page';
        return view('admin.pages.logout', $data);
    }

    public function passwordReset(){
        $data['pageTitle'] = 'Reset Password';
        return view('admin.pages.passwordreset', $data);
    }

    public function lock(){
        $data['pageTitle'] = 'Lock';
        return view('admin.pages.lock', $data);
    }

    public function notfound(){
        $data['pageTitle'] = 'Lock';
        return view('admin.pages.404', $data);
    }

    public function internalError(){
        $data['pageTitle'] = 'Lock';
        return view('admin.pages.500', $data);
    }

    public function company(){
        $data['pageTitle'] = 'Company';
        return view('admin.pages.company', $data);
    }

    public function members(){
        $data['pageTitle'] = 'members';
        return view('admin.pages.members', $data);
    }

    public function maintainance(){
        $data['pageTitle'] = 'maintainance';
        return view('admin.pages.maintainance', $data);
    }

    public function calander(){
        $data['pageTitle'] = 'calander';
        return view('admin.calander', $data);
    }

    public function tickets(){
        $data['pageTitle'] = 'tickets';
        return view('admin.tickets', $data);
    }
}
