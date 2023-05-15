<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'departments';

    protected $fillable = [
        'id',
        'employee_code',
        'dpname',
        'position',
        'others',
    ];
}
