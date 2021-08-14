<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
        'date',
    ];
    public function ressource(){
        return $this->belongsTo(Ressource::class);
    }
    public function partenaire(){
        return $this->belongsToMany(Partenaire::class, 'collaborateurs');
    }
    
}
