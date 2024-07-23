<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guardia;

class Sesione extends Model
{
    use HasFactory;

    protected $fillable = ['id_guardia', 'fecha'];

    public function guardias()
    {
        return $this->belongsTo(Guardia::class, 'id_guardia');
    }
}
