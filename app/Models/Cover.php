<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    use HasFactory;

    public function coverGroup()
    {
        return $this->hasOne(CoverGroup::class);
    }
}
