<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Equipo extends Model
{
    use HasFactory;

    protected $table = 'gcm_equipos';
    protected $primaryKey = 'id_equipo';
    public $timestamps = false;

    protected $fillable = [
        'id_equipo',
        'descripcion',
    ];
}
