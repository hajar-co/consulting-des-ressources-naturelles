<?php

namespace App\Models;

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
    ];
    public function equipe(){
        return $this->belongsTo(Equipe::class);
    }
}
