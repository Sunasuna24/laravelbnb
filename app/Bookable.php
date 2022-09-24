<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
}
