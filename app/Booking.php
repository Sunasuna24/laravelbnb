<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    protected $fillable = ['from', 'to'];

    public function bookable()
    {
        return $this->hasMany(Bookable::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function scopeBetweenDates(Builder $query, $from, $to)
    {
        return $query->where('to', '>=', $from)->where('from', '<=', $to);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Booking $booking) {
            $booking->review_key = Str::uuid();
        });
    }
}
