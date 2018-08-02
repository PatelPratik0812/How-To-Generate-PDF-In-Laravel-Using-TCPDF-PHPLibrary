<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table ='register';
    protected $fillable = [
        'username','email','mobile_no','education','country'
    ];  
 
    public $timestamps = false;
}
