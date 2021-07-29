<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'poste',
        'content',
    ];
    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }
    public function actualite(){
        return $this->hasMany(Actualitie::class);
    }
    public function projet(){
        return $this->hasMany(Projet::class);
    }
}
