<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    protected $fillable = [
        'number',
        'commodity',
    ];

    public function flat()
    {
        return $this->belongsTo('App\Flat');
    }
}
