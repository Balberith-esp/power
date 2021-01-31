<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

        // Relacion uno a muchos polimorfica
        public function comments(){
            return $this->morphToMany(Recurso::class,'commentable');
        }
}
