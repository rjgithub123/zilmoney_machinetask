<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Language;

class Employees extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable=[
        'first_name',
        'last_name',
        'willing_to_work',
    ];


    public function languages()
    {
        return $this->belongsToMany(Language::class,'employee_languages', 'employee_id', 'language_id');
    }

   public function getNameAttribute()
{
    return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
}

}