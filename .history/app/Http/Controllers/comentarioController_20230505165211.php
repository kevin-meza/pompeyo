<?php

namespace App\Http\Controllers;
use App\Models\Posteos;
use App\Models\Comentario;
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

        $listaPost['listaPost'] =Posteos::join('users', "users.id_user", "=", "posteos.id_user")
        ->where('id_post', $id_post)->get();
        $comentarios['listaComentarios']=Comentario::join('users', "users.id_user", "=", "comentarios.id_user")
        ->where('id_post', $id_post)->get();
        // print_r($comentarios);exit;


       return view('comentarios/comentar')->with('listaPost', $listaPost)->with('comentarios', $comentarios);
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
        $datosComentario = request()->except('_token');
        // print_r($datosComentario);
        Comentario::insert($datosComentario);
        echo "llegaste al store";
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
