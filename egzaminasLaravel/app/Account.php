<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['nr_account', 'attribute', 'balance','plius', 'minus', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}

