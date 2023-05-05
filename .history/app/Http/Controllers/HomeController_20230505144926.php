<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posteos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listaPost['listaPost'] = Posteos::get();
        // print_r($listaPost);exit;
        return view('home',$listaPost);
    }
}
