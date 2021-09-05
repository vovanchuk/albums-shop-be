<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverGroup extends Model
{
    use HasFactory;

    public function covers()
    {
        return $this->belongsToMany(Cover::class);
    }
}
