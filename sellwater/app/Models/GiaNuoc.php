<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaNuoc extends Model
{
    use HasFactory;
    protected $table = 'gia_nuocs';
    public function nuoc()
    {
        return $this->belongsTo('App\Nuoc');
    }
}
