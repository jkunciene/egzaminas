<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Gate;
use App\Operation;
use Illuminate\Support\Facades\Auth;
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
        return view('bankas.pages.home');
    }


    public function showError()
    {
        return view('bankas.pages.errors');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
