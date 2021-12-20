<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skola;
use App\Models\Ucenik;

class Profesor extends Model
{
    use HasFactory;

    public function skola()
    {
        return $this->belongsTo(Skola::class);
    }

    public function ucenici()
    {
        return $this->hasMany(Ucenik::class);
    }
}
