<?php

namespace App\Http\Controllers;

use App\Models\Posteos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//usar storage
use PhpParser\Node\Stmt\TryCatch;

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
        print_r ($datosPost['imagen']);
        if ($request->hasFile($datosPost['imagen'] ) && $request->file('imagen')->isValid()) {
            echo "hay imagen";
            // $request->file('imagen')->store('build');
            // $datosPost['imagen'] = $request->file('imagen')->store('storage/public/imagenes');
        } else {
            // manejar el error de carga del archivo
            echo "error";
            // try {
            //     // $rutaImagen = $datosPost['imagen']->store('imagenes', 'public');
            //     $request->file('imagen')->store('public');
            //     // $datosPost['imagen'] = $request->file('imagen')->store('/storage/imagenes','storage');
            // } catch (\Throwable $th) {
            //     throw $th;
            // }
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
