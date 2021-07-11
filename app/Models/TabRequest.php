<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabRequest extends Model
{
    use HasFactory;

    //protected $table ="tab_requests";

    protected $guarded = [ ];

    //one-to-one relationship with user table
    public function user(){
        return $this->belongsTo(User::class, 'userId', 'id');
    }


}
