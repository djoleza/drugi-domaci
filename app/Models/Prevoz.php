<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prevoz extends Model
{
    use HasFactory;

    public function kamion()
    {
        return $this->belongsTo(Kamion::class);
    }
}
