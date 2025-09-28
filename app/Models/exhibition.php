<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exhibition extends Model
{
    use HasFactory;
    public function artworks() {
        return $this->hasMany(artworks::class);
       
    }
}
