<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Tipo_Reunion extends Model
{
    use HasFactory;

    protected $table = 'gcm_tipos_reuniones';
    protected $primaryKey = 'id_tipo_reunion';
    public $timestamps = false;

    protected $fillable = [
        'id_tipo_reunion',
        'id_grupo',
        'id_equipo',
        'descripcion',
        'ruta_acta',
        'quorum',
        'estado',
    ];
}
