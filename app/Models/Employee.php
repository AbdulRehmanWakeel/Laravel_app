<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    function getFun(){
        echo "get function called";
    }

    function getNameAttribute($val){
        return ucfirst($val);

    }
    function getPhoneAttribute($val){
        return  "+92-".$val;

    }
    function setNameAttribute($val){
        // $this->attributes['name']="Sara";
        $this->attributes['name']=ucfirst($val);

    }
    function setPhoneAttribute($val){
        $this->attributes['phone']="+92-".$val;

    }
}
