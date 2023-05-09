<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    public $table = "degrees";
    protected $fillable = [
        'nombre',
        'id'
    ];

    // // union de las tablas degree e internship
    // public function internships () {
    //     return $this->belongsToMany(Internship::class , 'degree_internship');
    // }

    

}
