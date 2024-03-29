<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamba extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "trabajo_id", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function images()
    {
        return $this->hasMany(ImagesChamba::class);
    }
    public function requests()
    {
        return $this->hasMany(RequestChamba::class);
    }
}
