<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Alumno extends Model
{
    use HasFactory;
//    protected $table="alumnos";
    //Este atributo sólo hay que declarar cuando la tabla asociada a este modelo no cumplla el estádar de que sea el nombre del modelo con una s
    protected $fillable=['nombre','email','dir','dni'];
}
