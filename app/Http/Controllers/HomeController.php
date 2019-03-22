<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sid=$_GET['sid'];
        // if(isset($_GET['sid'])){
        //     session_id($_GET['sid']); 
        //     session_start();
        //     var_dump( $_SESSION['testing']);
        //     var_dump( $_SESSION['auth.Users']);
        //     // if(isset($_SESSION['auth.Users'])){
        //     //     return redirect('/');
        //     // }
        // }
        
        return view('home');
    }
}
