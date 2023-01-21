<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vozac;
use App\Models\Prevoz;

class Kamion extends Model
{
    use HasFactory;

    public function vozac()
    {
        return $this->belongsTo(Vozac::class);
    }

    public function prevozi()
    {
        return $this->hasMany(Prevoz::class);
    }
}
