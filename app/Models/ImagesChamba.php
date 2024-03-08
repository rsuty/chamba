<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesChamba extends Model
{
    use HasFactory;
    protected $fillable = ['filename'];

    public function post()
    {
        return $this->belongsTo(Chamba::class);
    }
}
