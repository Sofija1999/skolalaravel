<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Skola extends Model
{
    use HasFactory;

    public function profesori()
    {
        return $this->hasMany(Profesor::class);
    }
}
