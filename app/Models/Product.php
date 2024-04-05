<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function participants() {
        return $this->belongsTo('App\Models\Participant');
    }
  
    public function bookings() {
        return $this->hasMany('App\Models\Booking', 'product_name');
    }
    use HasFactory;
}
