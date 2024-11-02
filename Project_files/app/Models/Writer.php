<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Writer extends Model
{
    use  HasFactory;

    protected $fillable = [
        'Name',
        'specialist',
        'image'
    ];

    public function article(){
        return $this-> hasMany(Article::class,'writer_id');
    }

}
