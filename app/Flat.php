<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $fillable = [
        'number',
        'rooms_number',
        'entrance',
        'floor',
        'area',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meters()
    {
        return $this->hasMany('App\Meter');
    }
}
