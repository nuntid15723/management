<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'employees';

    protected $fillable = [
        'id',
        'employee_code',
        'name',
        'start_date',
        'description',
        'image',
    ];
}
