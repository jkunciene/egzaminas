<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperationController extends Controller
{
    public function moneyTransfer(){
        return view('bankas.pages.pinigu_pavedimas');
    }

    public function StoreTransfer(Request $request){
            $validateDate = $request->validate([
                'saskaita' => 'required',
                'suma' => 'required',
                'gavejoVardas' => 'required',
                'gavejoPavarde' => 'required'
            ]);
            $operation = Operation::create([
                //i db stulpeli vardu name, idek title reiksme "name" is formos
                'payer_id' =>  Auth::id(),
                'nr_account' => request('saskaita'),
                'amount' => request('suma'),
                'receiver_name' => request('gavejoVardas'),
                'receiver_surname' => request('gavejoPavarde'),
                'status'=>'0'
            ]);
            return redirect('/user_account/');
        }

}
