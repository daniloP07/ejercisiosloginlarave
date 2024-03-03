<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illluminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    if (Auth::check()) {
        return redirect()->route('clientes.index');
    }

    return view('home');
}
}