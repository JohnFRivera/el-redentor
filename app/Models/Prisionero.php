<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visita;

class Prisionero extends Model
{
    use HasFactory;

    protected $fillable = ['nombres', 'fecha_nacimiento', 'fecha_ingreso', 'delito', 'celda'];

    public function visitas()
    {
        return $this->hasMany(Visita::class, 'id_prisionero');
    }
}
