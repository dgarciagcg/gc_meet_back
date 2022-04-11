<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Equipo_Usuario extends Model
{
    use HasFactory;

    protected $table = 'gcm_equipos_usuarios';
    protected $primaryKey = 'id_equipo_usuario';
    public $timestamps = false;

    protected $fillable = [
        'id_equipo',
        'id_usuario',
    ];
}
