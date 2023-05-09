<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $table = "contacts";
    protected $fillable = [
        'email',
        'phone',
        'facebook',
        'id'
    ];
    
    // union de las tablas company e contact
    public function companies() {
        return $this->belongsToMany(Company::class, 'contact_company');
    }
}
