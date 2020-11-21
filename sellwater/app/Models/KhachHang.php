<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'khach_hangs';
    public function loaiDo()
    {
        return $this->belongsTo('App\LoaiDo');
    }
}
