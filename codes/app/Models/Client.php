<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    public function experience(){
        return $this->hasMany(Experience::class);
    }
    public function ressource(){
        return $this->hasMany(Ressource::class);
    }

}
