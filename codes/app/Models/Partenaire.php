<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
    ];
    public function projet(){
        return $this->belongsToMany(Projet::class, 'collaborateurs');
    }
}
