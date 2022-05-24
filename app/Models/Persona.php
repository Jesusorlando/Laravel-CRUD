<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $nombre
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $email
 * @property $cveDepto
 * @property $clave
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
		'email' => 'required',
		'cveDepto' => 'required',
		'clave' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidoPaterno','apellidoMaterno','email','cveDepto','clave'];



}
