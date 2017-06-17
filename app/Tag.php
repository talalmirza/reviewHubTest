<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }
}
