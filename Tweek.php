<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweek extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}