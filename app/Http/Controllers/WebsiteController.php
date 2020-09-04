<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        return view('website.index');
    }

    public function ourProducts()
    {
        $records = Product::with('status')->with('status')->get();
        return view('website.products', ['records'=>$records]);
    }

    public function ourServices()
    {
        return view('website.ourServices');
    }

    public function about()
    {
        return view('website.company');
    }


    public function solutions()
    {
        return view('website.solutions');
    }

    public function services()
    {
        return view('website.services');
    }
    
}
