<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
use App\Supplier;
use App\Rating;

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
        return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers, 'type'=>null, 'url'=>null]);
    }

    public function ourServices()
    {
        $records=Rating::all();
        return view('website.ourServices', ['records'=>$records]);
    }

    public function about()
    {
        return view('website.company');
    }


    public function solutions($type, $url)
    {
        $subcategories=Subcategory::all();
        return view('website.solutions', ['subcategories'=>$subcategories, 'type'=>$type, 'url'=>$url ]);
    }

    public function services()
    {
        return view('website.services');
    }
    
}
