<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Ucenik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'adresa',
        'email',
        'profesor_id'
    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
}
