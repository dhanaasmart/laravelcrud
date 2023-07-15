<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeedetails extends Model
{
    use HasFactory;
    protected $table='employeedetails';
    protected $fillable =[
        'empid',
        'empname',
        'designation',
        'salary',
        'profile_image',
    ];
}
