<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Subcategory;
use App\Supplier;
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
        $records = Product::with('status')->with('category')->with('subcategory')->get();
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
        $subcategories = Subcategory::all();
        $suppliers = Supplier::all();
        $status = Status::all();
        return view("products.create", ["categories" => $categories, "status" => $status, 'suppliers'=>$suppliers, 'subcategories'=>$subcategories]);
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
        'url_image' => 'required|image',
        'name' => 'required',
        'url' => 'required',
        'description' => 'required',
        'information' => 'required',
        'reference_link' => 'required',
        'category_id' => 'required',
        'status_id' => 'required',
        'price' => 'required',
        'type_id' => 'required',
    ]);

    DB::beginTransaction();
    try {
        $record = new Product;
        $record->status_id = $request->status_id;
        $record->name = $request->name;
        $record->url = $request->url;
        $record->sku=trim($request->name);
        $record->description = $request->description;
        $record->information = $request->information;
        $record->reference_link = $request->reference_link;
        $record->price = $request->price;
        $record->type_id = $request->type_id;
        $record->objective = $request->name;
        $record->details = $request->name;
        $record->specs = $request->name;
        $record->supplier_id = $request->supplier_id;
        $record->save();


        for ($i=0; $i < sizeof($request->category_id); $i++) { 
            $request->category_id[$i];
            DB::table('category_product')->insert(
                ['category_id' => $request->category_id[$i], 'product_id' => $record->id]
            );
        }

        for ($i=0; $i < sizeof($request->subcategory_id); $i++) { 
            //dd($request->category_id[$i]);
            DB::table('product_subcategory')->insert(
                ['subcategory_id' => $request->subcategory_id[$i], 'product_id' => $record->id]
            );
        }

        //******carga de imagen**********//
        if ($request->hasFile('url_image')) {
            $extension = $request->file('url_image')->getClientOriginalExtension();
            $imageNameToStore = $record->sku . '.' . $extension;
            // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('url_image')->storeAs('public/products', $imageNameToStore);
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
        $record=Product::findOrFail($product->id);
        return view('products.show', ['record'=>$record]);
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
