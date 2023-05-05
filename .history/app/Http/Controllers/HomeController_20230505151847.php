<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posteos;
use App\Models\User;
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
        // $listaPost['listaPost'] = Posteos::get();
        $listaPost['listaPost'] = User::get();
        // print_r($listaPost);exit;
        $listaUser['listaUser'] = Posteos::join('users', "users.id_user", "=", "posteos.id_user")
        ->get();
        // print_r($listaUser);exit;
        return view('home',$listaPost);
    }
}
