<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class author extends Authenticable
{
    protected $fillable=['name','address','email','contact','username','password'];
}
