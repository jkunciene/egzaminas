<?php

namespace App\Http\Controllers;

use App\Operation;
use App\Account;
use App\User;
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

            Operation::where('status', '0')->
            update(['status' => '1']);


            Account::where('user_id', request('id'))->
            update([
                'minus'=>request('suma')

            ]);

            Account::where('nr_account', request('saskaita'))->
                update([
                    'plius'=>request('suma')

            ]);


            return redirect('/user_account/');
        }

}
