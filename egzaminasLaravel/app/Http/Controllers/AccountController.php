<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{
    public function userAccount(){
        $accounts = Account::all();
        return view ('bankas.pages.user_account', compact('accounts'));
    }
}
