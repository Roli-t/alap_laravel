<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bejegyzesek extends Model
{
    use HasFactory;

    public function tevekenyseg(){
        return $this->belongsTo(tevekenyseg::class, "id");
    }
}
