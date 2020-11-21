<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nuoc extends Model
{
    use HasFactory;
    protected $table = 'nuocs';
    public function gias()
    {
        return $this->hasMany('App\Gia');
    }
    public function nuoc()
    {
        return $this->belongsTo('App\Nuoc');
    }
}
