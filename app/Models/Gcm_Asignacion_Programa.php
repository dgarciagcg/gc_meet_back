<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Asignacion_Programa extends Model
{
    use HasFactory;

    protected $table = 'gcm_asignaciones_programacion';
    protected $primaryKey = 'id_asignacion_programa';
    public $timestamps = false;

    protected $fillable = [
        'id_asignacion_programa',
        'id_programa',
        'id_recurso',
        'tipo',
    ];
}
