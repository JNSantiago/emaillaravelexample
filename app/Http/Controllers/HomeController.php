<?php

namespace App\Http\Controllers;
use Auth;
use Mail;
use App\Mail\DemoMail;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Auth::user()->email;
        Mail::to($email)->send(new DemoMail());
        return view('home');
    }
}
