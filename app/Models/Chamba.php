<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamba extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "trabajo_id", "user_id"];
}
