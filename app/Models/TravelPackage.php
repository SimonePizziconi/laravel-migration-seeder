<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    use HasFactory;

    public function getDepartureDateAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    public function getReturnDateAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }
}
