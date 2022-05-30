<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nodo
 *
 * @property $id
 * @property $clave
 * @property $cveVlan
 * @property $cveDispositivo
 * @property $cvePersona
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nodo extends Model
{
    
    static $rules = [
		'clave' => 'required',
		'cveVlan' => 'required',
		'cveDispositivo' => 'required',
		'cvePersona' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clave','cveVlan','cveDispositivo','cvePersona'];



}
