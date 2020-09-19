<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Product;
use App\Supplier;
use DB;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Subcategory::all();
        return view("subcategories.index", ["records" => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("subcategories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name' => 'required',
            'description' => 'max:255',
            'url_image' => 'required|image',
            'url' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $record = new Subcategory;
            $record->name = $request->name;
            $record->url = $request->url;
            $record->description = $request->description;
            $record->save();
            //******carga de imagen**********//
        if ($request->hasFile('url_image')) {
            $extension = $request->file('url_image')->getClientOriginalExtension();
            $imageNameToStore = $record->url . '.' . $extension;
            // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('url_image')->storeAs('public/subcategories', $imageNameToStore);
            //dd($path);
            $record->url_image = $imageNameToStore;
            $record->save();
        }
        //******carga de imagen**********//
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback(); //si hay un error previo, desahe los cambios en DB y redirecciona a pagina de error
            //$response['message'] = $e->errorInfo;
            //dd($e->errorInfo[2]);
            abort(500, $e->errorInfo[2]); //en la poscision 2 del array está el mensaje
            return response()->json($response, 500);
        }
        DB::commit();
        return redirect()->action( //regresa con el error
            'SubcategoryController@index')->with(['message' => 'Se agregó el registro correctamente', 'alert' => 'warning']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
        $products_id = DB::table('product_subcategory')->select('product_id')
        ->where('subcategory_id', $subcategory->id)->distinct()->get();
        $records = Product::whereIn('id', $products_id->pluck("product_id"))->with('status')->with('status')->get();
        $suppliers=Supplier::all();
        return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }

    public function subcategory($type, $url, $subcategory)
    {
        //
        $subcategory=Subcategory::where('url',$subcategory )->firstOrFail();
        //dd($subcategory);
        $products_id = DB::table('product_subcategory')->select('product_id')
        ->where('subcategory_id', $subcategory->id)->distinct()->get();
        $records = Product::whereIn('id', $products_id->pluck("product_id"))->with('status')->with('status')->get();
        $suppliers=Supplier::all();
        return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers, 'type'=>$type, 'url'=>$url, 'subcategory'=>$subcategory]);
    }
}
