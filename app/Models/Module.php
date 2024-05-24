<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    public function teacher(){

        return $this->hasOne('App/Models/Teacher');
    }

    public function students(){

        return $this->hasMany('App/Models/Student');
    }

}
