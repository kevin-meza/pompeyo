<?php

namespace App\Http\Controllers;

use App\Models\Posteos;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ("post/form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosPost = request()->except('_token');
        if($request->hasFile('imagen')){
            //si hay una imagen la tomamos le ponemos un nombre y la enviamos a carpeta storage
            $datosPost['imagen']=$request->file('imagen')->store('imagenes','public');
        }
        Posteos::insert($datosPost);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
