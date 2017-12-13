<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficinas = Oficina::getOficinas();
        return view('home', ['oficinas' => $oficinas]);
    }
}
