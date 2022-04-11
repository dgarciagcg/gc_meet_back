<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Convocado_Reunion extends Model
{
    use HasFactory;

    protected $table = 'gcm_convocados_reuniones';
    protected $primaryKey = 'id_convocado_reunion';
    public $timestamps = false;

    protected $fillable = [
        'id_convocado_reunion',
        'id_reunion',
        'tipo',
        'sociedad',
        'id_recurso',
        'representacion',
        'fecha',
        'poder',
        'participacion',
        'estado',
    ];
}
