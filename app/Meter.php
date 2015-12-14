<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    protected $fillable = [
        'number',
        'commodity',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flat()
    {
        return $this->belongsTo('App\Flat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function measurements()
    {
        return $this->hasMany('App\Measurement');
    }

    public function type()
    {
        return $this->belongsTo('App\MeterType', 'type_id');
    }

}
