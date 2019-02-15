<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    //
    public function PO()
    {
    	return $this->belongsTo('App\User','product_owner');
    }

}
