<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'languages_known'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employees::class);
    }
}
