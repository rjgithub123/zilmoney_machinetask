<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable=[
        'first_name',
        'last_name',
        'willing_to_work',
    ];


    public function languages()
    {
        return $this->belongsToMany(Languages::class);
    }

    public function getNameAttribute()
    {
        return ucfirst('first_name').' '.ucfirst('last_name');
    }
}
