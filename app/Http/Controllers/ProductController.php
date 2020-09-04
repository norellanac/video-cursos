<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Status;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Product::all();
        return view("products.index", ["records" => $records]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $status = Status::all();
        return view("products.create", ["categories" => $categories, "status" => $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       request()->validate([
        'featured_image' => 'required|image',
        'title' => 'required',
        'description' => 'required',
        'information' => 'required',
        'reference_link' => 'required',
        'category_id' => 'required',
        'status_id' => 'required',
        'price' => 'required',
    ]);

    DB::beginTransaction();
    try {
        $record = new Product;
        $record->status_id = $request->status_id;
        $record->title = $request->title;
        $record->description = $request->description;
        $record->information = $request->information;
        $record->reference_link = $request->reference_link;
        $record->price = $request->price;
        $record->category_id = $request->category_id;
        $record->save();
        //******carga de imagen**********//
        if ($request->hasFile('featured_image')) {
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $imageNameToStore = $record->id . '.' . $extension;
            // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('featured_image')->storeAs('public/products', $imageNameToStore);
            //dd($path);

            $record->featured_image = $imageNameToStore;
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
        'ProductController@index')
        ->with(['message' => 'Se agregó el registro correctamente', 'alert' => 'warning']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
