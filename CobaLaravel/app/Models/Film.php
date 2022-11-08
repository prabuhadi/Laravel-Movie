<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    protected $table = "film";
    protected $fillable = ["judul", "ringkasan", "tahun", "poster", "genre_id"];
}
