<?php

namespace App\Models;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
        'date',
        'Equipes_id',
    ];
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
}
