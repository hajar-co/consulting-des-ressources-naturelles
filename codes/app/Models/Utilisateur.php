<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
    public function experience(){
        return $this->hasMany(Experience::class);
    }
    public function ressource(){
        return $this->hasMany(Ressource::class);
    }
    public function actualitie(){
        return $this->hasMany(Actualitie::class);
    }
}
