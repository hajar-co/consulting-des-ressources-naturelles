<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ressource extends Model
{
    use HasFactory;
    protected $fillable = [
        'probleme',
        'localisation',
        'telephone',
        'users_id',
        'types_id',
    ];
    public function client(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
        }
    public function projet(){
        return $this->hasMany(Projet::class);
            }
   
}

