<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $table = 'employee';
    protected $fillable = ['first_name','last_name','gender','email','password', 'mobile_no'];

    
}
