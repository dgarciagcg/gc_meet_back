<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Programa extends Model
{
    use HasFactory;

    protected $table = 'gcm_programacion';
    protected $primaryKey = 'id_programa';
    public $timestamps = false;

    protected $fillable = [
        'id_programa',
        'id_reunion',
        'titulo',
        'ejecucion',
        'orden',
        'numeracion',
        'tipo',
        'complemento_tipo',
        'relacion',
        'estado',
    ];
}
