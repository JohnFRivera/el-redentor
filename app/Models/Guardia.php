<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visita;
use App\Models\Sesione;

class Guardia extends Model
{
    use HasFactory;

    protected $fillable = ['identificacion', 'nombres', 'estado'];

    public function visitas()
    {
        return $this->hasMany(Visita::class, 'id_guardia');
    }
    public function sesione()
    {
        return $this->hasMany(Sesione::class, 'id_guardia');
    }
}
