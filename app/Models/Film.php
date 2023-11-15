<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function types() {
        return $this->hasMany(Type::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_like');
    }
}
