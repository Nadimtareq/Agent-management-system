<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email','contact_num', 'password',
    ];

    public function activities(){

        return $this->hasMany('App\Models\activitiesModel');
    }
//
//    public function phase(){
//
//        return $this->hasMany('App\phaseModel');
//    }
//
//    public function timetabel(){
//
//        return $this->hasMany('App\timetabelModel');
//    }


}
