<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingshelf extends Model
{
    // use HasFactory;
    public function bookingshelf()
    {
        return $this->belongsTo(Bookingshelf::class); // Sesuaikan dengan nama model terkait
    }
}

