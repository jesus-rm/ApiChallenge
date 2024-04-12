<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'suite',
        'city',
        'zipcode',
        'geo_id',
    ];

    public function visitor()
    {
        return $this->hasOne(Visitor::class);
    }

    public function geo()
    {
        return $this->belongsTo(Geo::class);
    }
}
