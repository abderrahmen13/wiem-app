<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruteur extends Model
{
    use HasFactory;

    public function condidat()
    {
        return $this->belongsTo(condidat::class);
    }
}
