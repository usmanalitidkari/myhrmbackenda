<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }
}