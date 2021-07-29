<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;
    protected $fillable = [
        'probleme',
        'localisation',
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
        }
    public function projet(){
        return $this->hasMany(Projet::class);
            }
   
}

