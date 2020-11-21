<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiDo extends Model
{
    use HasFactory;
    protected $table = 'loai_dos';
    public function loai()
    {
        return $this->belongsTo('App\Loai');
    }
    public function khachHangs()
    {
        return $this->hasMany('App\KhachHang');
    }

}
