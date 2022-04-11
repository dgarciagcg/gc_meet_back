<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcm_Usuario extends Model
{
    use HasFactory;

    protected $table = 'gcm_usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    /**
     * The "type" of the non auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'nombre',
        'correo',
        'contrasena',
        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contrasena',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     * Devuelve una matriz de valor clave, que contiene cualquier reclamo personalizado que se agregará al JWT.
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return[
                'id_usuario' => $this->id_usuario,
                'correo'     => $this->correo,
                'nombre'     => $this->nombre,
            ];
    }
}
