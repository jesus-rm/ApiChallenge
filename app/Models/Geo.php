<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Geo extends Model
{
    use HasFactory;

    protected $fillable = [
        'lat',
        'lng',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
