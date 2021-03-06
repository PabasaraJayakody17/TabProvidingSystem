<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'schoolId',
        'schoolType',
        'schoolcategory',
        'province',
        'district',
        'zonalEducationOffice',
        'educationDivision',
        'schoolName',
        'address',
        'telNo',
        'email'
    ];

}
