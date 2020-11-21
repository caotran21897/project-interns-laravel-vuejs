<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiNuoc extends Model
{
    use HasFactory;
    protected $table = 'loai_nuocs';
    public function nuocs()
    {
        return $this->hasMany('App\Nuoc');
    }
    public function loai()
    {
        return $this->belongsTo('App\Loai');
    }
}
