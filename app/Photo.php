<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];

    public function advert()
    {
        return $this->belongsTo(Advert::class);
    }
}
