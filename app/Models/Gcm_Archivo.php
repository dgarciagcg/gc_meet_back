<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Archivo extends Model
{
    use HasFactory;

    protected $table = 'gcm_archivos';
    protected $primaryKey = 'id_archivo';
    public $timestamps = false;

    protected $fillable = [
        'id_archivo',
        'id_reunion',
        'id_programa',
        'descripcion',
        'peso',
        'url',
    ];
}
