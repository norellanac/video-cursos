<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
use App\Supplier;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $records= Category::all();
        return view('website.index', ['records'=>$records]);
    }

    public function ourProducts()
    {
        $suppliers=Supplier::all();
        $records = Product::with('status')->with('status')->get();
        return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers]);
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
        $subcategories=Subcategory::all();
        return view('website.solutions', ['subcategories'=>$subcategories]);
    }

    public function services()
    {
        return view('website.services');
    }
    
}
