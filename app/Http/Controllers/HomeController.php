<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Usuarios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct()
    {
        // date_default_timezone_set('America/Fortaleza');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        return view('home', ['usuarios'=>$usuarios]);
    }

    public function exportar()
    {
        return view('arquivos');
    }
}
 