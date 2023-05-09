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
        'contact_id',
        'foto',
        'id'
    
    ];
    
    // union de las tablas company e contact
    public function contacts() {
        return $this->belongsToMany(Contact::class, 'contact_company');
    }

    public function internships() {
        return $this->belongsToMany(Internship::class, 'company_internship');
    }
}
