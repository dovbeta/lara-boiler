<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeterType extends Model
{
    protected $fillable = [
        'commodity',
        'unit',
    ];

    public function meters()
    {
        return $this->hasMany('App\Meter', 'type_id');
    }

}
