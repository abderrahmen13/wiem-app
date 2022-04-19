<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    use HasFactory;

    public function recruteur()
    {
        return $this->hasMany(Recruteur::class);
    }
}
