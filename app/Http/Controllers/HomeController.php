<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $id = Auth::user()->id;
        $soldes = DB::table('soldes')->where('id_user','==',$id)->get();

        return view('home', ['soldes' => $soldes]);
        return view('home');
    }

    public function product()
    {
        return view('product');
    }
}
