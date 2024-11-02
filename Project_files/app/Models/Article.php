<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use  HasFactory;

    protected $fillable = [
        'Title',
        'releaseDate',
        'writer_id',
        'Description',
        'image',
        'Content'
    ];

    public function writer(){
        return $this->belongsTo(writer::class, 'writer_id');
    }
}
