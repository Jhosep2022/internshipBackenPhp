<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;



    public $table = "internships";
    protected $fillable = 
    [
        'nombre',
        'descripcion',
        'resposabilidades',
        'requisitos',
        'fecha',
        'fecha_limite',
        "contact_id",
        'degree_id',
        'company_id',
        'foto',
        'id'
    ];


}
