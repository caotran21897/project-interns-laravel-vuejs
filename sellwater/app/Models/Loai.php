<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    use HasFactory;
    protected $table = 'loais';
    public function loaiNuocs()
    {
        return $this->hasMany('App\LoaiNuoc');
    }
    public function losiDos()
    {
        return $this->hasMany('App\LoaiDo');
    }

}
