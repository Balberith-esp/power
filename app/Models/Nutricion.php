<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutricion extends Model
{
    use HasFactory;
    protected $table = 'nutricion';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion uno a muchos polimorfica
    public function comments(){
        return $this->morphToMany(Recurso::class,'commentable');
    }

}
