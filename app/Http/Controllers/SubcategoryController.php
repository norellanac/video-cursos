<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use App\Product;
use App\Rating;
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
        $suppliers=Supplier::all();
        //*********IMPORTANTE PARA MOSTRAR LOS PRODUCTOS CON LOS FILTROS DE DISTINTAS CATEGORIAS******** */
        $subcategory=Subcategory::where('url',$subcategory )->firstOrFail();
        //dd($subcategory);
        if ($type=="industria") {
        //*********busqueda por categoria principal****** */
        $category=Category::where('url',$url )->firstOrFail();
        //**********obtiene los id de lca categorias o industrias */
        $products_category_ids = DB::table('category_product')->select('product_id')
        ->where('category_id', $category->id)->distinct()->get();
        //dd($products_category_ids);
        //**********obtiene los id de las subcategorias o soluciones */
        $products_ids = DB::table('product_subcategory')->select('product_id')
        ->where('subcategory_id', $subcategory->id)->whereIn('product_id', $products_category_ids->pluck("product_id"))->distinct()->get();
        //dd($products_ids);
        //dd(array($products_subcat_ids->pluck("product_id")));
        //$products_idsAAA=array_intersect(array($products_category_ids->pluck("product_id")), array($products_subcat_ids->pluck("product_id")));   
         //********obtine los productos con filtros de industria y solucion**** */
        //dd($products_ids[0]);
        //dd(sizeof( $products_ids));
        $records = Product::whereIn('id', $products_ids->pluck("product_id"))
        ->with('status')->with('status')->get();
        //dd($records);
        return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers, 'type'=>$type, 'url'=>$url, 'subcategory'=>$subcategory]);
        }
        if ($type=="clasificacion") {
            //*********busqueda por categoria principal****** */
            $rating=Rating::where('url',$url )->firstOrFail();
            //**********obtiene los id de lca categorias o industrias */
            $products_ratings_ids = DB::table('product_rating')->select('product_id')
            ->where('rating_id', $rating->id)->distinct()->get();
            //**********obtiene los id de las subcategorias o soluciones */
            $products_subcat_ids = DB::table('product_subcategory')->select('product_id')
            ->where('subcategory_id', $subcategory->id)->distinct()->get();
            //dd($products_subcat_ids->pluck("product_id"));
            //dd($products_ratings_ids->pluck("product_id"));
            $products_ids=array_intersect(array($products_subcat_ids->pluck("product_id")), array($products_ratings_ids->pluck("product_id")));   
            //********obtine los productos con filtros de industria y solucion**** */
            //dd($products_ids);
            dd(sizeof( $products_ids));            
            //+++++++++++++++++++++++++++++++++
            if (sizeof( $products_ids) > 0) {
                $records = Product::whereIn('id', $products_ids[0])
            ->with('status')->with('status')->get();
            } 
            else{
                $records = null;
            }
            return view('website.products', ['records'=>$records, 'suppliers'=>$suppliers, 'type'=>$type, 'url'=>$url, 'subcategory'=>$subcategory]);    
        }
    }
}
