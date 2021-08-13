<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablist extends Model
{
    use HasFactory;
    protected $fillable = [
        'serialNumber',
        'category',
        'tabName',
        'description'
      
    ];
}
