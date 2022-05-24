<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $matricula
 * @property $nombre
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'matricula' => 'required',
		'nombre' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula','nombre','apellidoPaterno','apellidoMaterno'];



}
