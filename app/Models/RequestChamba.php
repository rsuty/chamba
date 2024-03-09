<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestChamba extends Model
{
    use HasFactory;

    protected $fillable = ["user_id", "chamba_id"];
    public function chambas()
    {
        return $this->belongsTo(Chamba::class);
    }
}
