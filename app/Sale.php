<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function costumer()
    {
        return $this->belongsTo('App\Costumer');
    }
}
