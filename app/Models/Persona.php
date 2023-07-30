<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Cedula
 * @property $Email
 * @property $Edad
 * @property $created_at
 * @property $updated_at
 * @property $Fecha_de_Nacimiento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Cedula' => 'required',
		'Email' => 'required',
		'Edad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Cedula','Email','Edad','Fecha_de_Nacimiento'];



}
