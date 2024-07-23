<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prisionero;
use App\Models\Visitante;
use App\Models\Guardia;

class Visita extends Model
{
    use HasFactory;

    protected $fillable = ['id_prisionero', 'id_visitante', 'id_guardia', 'fecha', 'hora_inicio', 'hora_fin', 'estado'];

    public function prisioneros()
    {
        return $this->belongsTo(Prisionero::class, 'id_prisionero');
    }
    public function visitantes()
    {
        return $this->belongsTo(Visitante::class, 'id_visitante');
    }
    public function guardias()
    {
        return $this->belongsTo(Guardia::class, 'id_guardia');
    }
}
