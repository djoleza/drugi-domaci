<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kamion;

class Vozac extends Model
{
    use HasFactory;

    public function kamioni()
    {
        return $this->hasMany(Kamion::class);
    }
}
