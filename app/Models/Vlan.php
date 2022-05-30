<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vlan
 *
 * @property $id
 * @property $clave
 * @property $segmento
 * @property $desc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vlan extends Model
{
    
    static $rules = [
		'clave' => 'required',
		'segmento' => 'required',
		'desc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clave','segmento','desc'];



}
