<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getDepartureDateAttribute()
    {
        return date('d/m/Y');
    }

    public function getOnTime()
    {
        // Verifica se il treno è in orario
        if ($this->on_time) {
            return '<span style="color: green; font-size: 24px;">&#9679;</span>';
        } else {
            return '<span style="color: red; font-size: 24px;">&#9679;</span>';
        }
    }

    public function getCancelled()
    {
        if ($this->cancelled) {
            return 'Si';
        } else {
            return 'No';
        }
    }
}
