<?php

namespace App\Http\Controllers;

use App\Rating;
use DB;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Rating::all();
        return view("ratings.index", ["records" => $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ratings.create");
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
            $record = new Rating;
            $record->name = $request->name;
            $record->url = $request->url;
            $record->description = $request->description;
            $record->save();
            //******carga de imagen**********//
        if ($request->hasFile('url_image')) {
            $extension = $request->file('url_image')->getClientOriginalExtension();
            $imageNameToStore = $record->url . '.' . $extension;
            // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('url_image')->storeAs('public/ratings', $imageNameToStore);
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
            'RatingController@index')->with(['message' => 'Se agregó el registro correctamente', 'alert' => 'warning']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
