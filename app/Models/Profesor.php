<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Profesor extends Model
{
    use HasFactory;
    protected $table="profesores";
    protected $fillable=['nombre','email','dir','dni'];
}
