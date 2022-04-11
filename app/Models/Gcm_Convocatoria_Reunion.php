<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Convocatoria_Reunion extends Model
{
    use HasFactory;

    protected $table = 'gcm_convocatoria_reuniones';
    protected $primaryKey = 'id_convocatoria_reunion';
    public $timestamps = false;

    protected $fillable = [
        'id_convocatoria_reunion',
        'id_convocado_reunion',
        'id_usuario',
        'fecha',
    ];
}
