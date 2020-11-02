<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Category;
use App\Subcategory;
use App\Supplier;
use App\Rating;
use App\Client;
use App\Mail\ContactSiteToAdmins;
use App\Mail\ContactFormClients;
use Illuminate\Support\Facades\Mail;

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
        $records = Product::with('status')
        ->where('type_id',1)
        ->with('status')->get();
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


    public function contactInfo(Request $request)
    {
        $record=new Client();
        $record->name=$request->name;
        $record->email=$request->email;
        $record->phone=$request->phone;
        $record->product=$request->product;
        $record->rating=$request->rating;
        $record->industry=$request->industry;
        $record->rating=$request->rating;
        $record->solution=$request->solution;
        $record->comments=$request->comments;
        $record->suscribe=1;
        $record->save();

        //************correos de notificacion**************
        $request->message = "Puebas pctec";
        $request->image = "http://pakal.site/img/icons/request.png";
        Mail::to(['norellana@pctecbus.co'])
            ->cc('norellana@pctecbus.co') // enviar correo con copia
            ->send(new ContactSiteToAdmins($request)); //envia la variables $request a la clase de MAIL
        Mail::to([$request->email])
        ->cc('norellana@pctecbus.co') // enviar correo con copia
        ->send(new ContactFormClients($request)); //envia la variables $request a la clase de MAIL
        //dd($request);
        return Redirect::back()->withErrors(['msg', 'The Message']);
    }
    
}
