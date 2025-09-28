<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\artworks;
class artworks extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'artist_id', 'exhibition_id'];

    public function exhibition() {
        return $this->belongsTo(exhibition::class);
    }
    public function artist() {
        return $this->belongsTo(artists::class);
    }
}