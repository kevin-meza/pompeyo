<?php

namespace App\Http\Controllers;
use App\Models\Posteos;
use Illuminate\Http\Request;

class comentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $datosPost = request()->except('_token');
        $id_post=$datosPost['id_post'];
        $listaPost['listaPost'] = Posteos::where('id_post', $id_post)->get();


        print_r($listaPost);


       return view('comentarios/comentar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
