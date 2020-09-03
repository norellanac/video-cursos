<?php

namespace App\Http\Controllers;

use App\Product;
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
        return view("products.index", ["categories" => $categories]);
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
       //
       request()->validate([
        'image' => 'required|image',
        'user_id' => 'required',
        'type_id' => 'required',
        'category_id' => 'required',
    ]);

    DB::beginTransaction();
    try {
        $award = new Award;
        $award->user_id = $request->user_id;
        $award->type_id = $request->type_id;
        $award->category_id = $request->category_id;
        $award->save();
        //******carga de imagen**********//
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageNameToStore = $award->id . '.' . $extension;
            // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('image')->storeAs('public/awards', $imageNameToStore);
            //dd($path);

            $award->url_image = $imageNameToStore;
            $award->save();
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
        'AwardController@index')
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
