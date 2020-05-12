<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table="donatur"; 

    public function transaksi()
    {
    	return $this->belongsToMany('App\Transaksi');
    }
}
