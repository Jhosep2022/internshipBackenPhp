<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    public $table = "internships";
    protected $fillable = array("*");

    // union de las tablas degree e internship
    public function degrees () {
        return $this->belongsToMany(Degree::class, 'degree_internship');
    }

    // union de las tablas company e internship
    public function companies() {
        return $this->belongsToMany(Company::class, 'company_internship');
    }
}