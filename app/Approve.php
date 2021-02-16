<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
