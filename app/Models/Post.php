<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'title',
        'body',  
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
