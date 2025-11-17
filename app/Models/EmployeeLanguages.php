<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeLanguages extends Model
{
    protected $table = 'employee_languages';
    public $timestamps = false;
    protected $fillable = [
        'employee_id',
        'language_id'
    ];


}
