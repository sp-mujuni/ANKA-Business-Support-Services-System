<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function products() {
        return $this->hasOne('App\Models\Product', 'participant_id');
    }
    
    use HasFactory;
}
