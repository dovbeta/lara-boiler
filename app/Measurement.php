<?php

namespace App;

use App\Models\Access\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Measurement extends Model
{
    protected $fillable = [
        'value',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meter()
    {
        return $this->belongsTo('App\Meter');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User','updated_by', 'id');
    }

}
