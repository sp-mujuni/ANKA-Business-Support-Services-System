<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function products() {
        return $this->belongsTo('App\Models\Product');
    }

    public function users() {
        return $this->belongsTo('App\Models\User');
    }
    
    use HasFactory;
}
