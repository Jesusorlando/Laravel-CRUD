<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dispositivo
 *
 * @property $id
 * @property $clave
 * @property $nombre
 * @property $cveTipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dispositivo extends Model
{
    
    static $rules = [
		'clave' => 'required',
		'nombre' => 'required',
		'cveTipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clave','nombre','cveTipo'];



}
