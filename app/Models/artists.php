<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\artworks;
class artists extends Model
{
    use HasFactory;
    public function artworks() {
        return $this->hasMany(artworks::class);
    }
}