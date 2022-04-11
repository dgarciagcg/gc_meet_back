<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Reunion extends Model
{
    use HasFactory;

    protected $table = 'gcm_reuniones';
    protected $primaryKey = 'id_reunion';
    public $timestamps = false;

    protected $fillable = [
        'id_reunion',
        'id_tipo_reunion',
        'descripcion',
        'fecha_actualizacion',
        'fecha_finalizacion',
        'fecha_reunion',
        'hora',
        'programacion',
        'acta',
        'estado',
    ];
}
