<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visita;

class Visitante extends Model
{
    use HasFactory;

    protected $fillable = ['cedula', 'nombres', 'parentesco'];

    public function visitas()
    {
        return $this->hasMany(Visita::class, 'id_visitante');
    }
}
