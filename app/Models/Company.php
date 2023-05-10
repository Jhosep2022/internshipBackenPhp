<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $table = "companies";
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'foto',
        'contact_id'
    ];
}

