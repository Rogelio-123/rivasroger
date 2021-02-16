<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
}
