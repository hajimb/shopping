<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('frontend/home');
    }

    public function about(){
        $data['pageTitle'] = 'About Us';
        return view('frontend/about-us', $data);
    }

    public function contact(){
        $data['pageTitle'] = 'Contact Us';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/contact-us', $data);
    }

    public function sitemap(){
        $data['pageTitle'] = 'Sitemap';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/sitemap', $data);
    }

    public function grid(){
        $data['pageTitle'] = 'Grid';
        $data['bodyclass'] = 'category-page';
        return view('frontend/grid', $data);
    }


    public function list(){
        $data['pageTitle'] = 'list';
        $data['bodyclass'] = 'category-page';
        return view('frontend/list', $data);
    }


    public function compare(){
        $data['pageTitle'] = 'compare';
        $data['bodyclass'] = 'category-page';
        return view('frontend/compare', $data);
    }


    public function quickview(){
        $data['pageTitle'] = 'Quick View';
        $data['bodyclass'] = 'cms-index-index';
        return view('frontend/quick-view', $data);
    }


    public function faq(){
        $data['pageTitle'] = 'FaQ';
        $data['bodyclass'] = 'faq-page';
        return view('frontend/faq', $data);
    }


    public function newsletter(){
        $data['pageTitle'] = 'Newsletter';
        $data['bodyclass'] = 'cms-index-index cms-home-page';
        return view('frontend/newsletter', $data);
    }

    public function notfound(){
        $data['pageTitle'] = 'Page Not Found';
        $data['bodyclass'] = 'shopping-cart-page';
        return view('frontend/404', $data);
    }

}
