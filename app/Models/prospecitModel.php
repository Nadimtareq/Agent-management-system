<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class prospecitModel extends Model
{

    protected $table = 'prospecit';
    protected $fillable = [
        'phase_id', 'client_name','address','pc_1','pc_2','pc_3','area','remarks','demand','type','created_by','updated_by'
    ];
    public function activities(){

        return $this->hasMany('App\Models\activitiesModel','prospecit_id');
    }

    public function phase(){

        return $this->belongsTo('App\Models\phaseModel','phase_id');
    }


//   public function timetable(){
//
//       return $this->hasOne('App\Models\timetabelModel');
//   }

    public function timetable(){

       return $this->hasOne('App\Models\timetabelModel','prospecit_id');
     }

    //public function activity(){

      //  return $this->hasOne('App\Models\activitiesModel','prospecit_id');
   // }

    public function createdBy(){

        return $this->belongsTo('App\Models\usersModel','created_by');
    }

    public function updatedBy(){

        return $this->belongsTo('App\Models\usersModel','updated_by');
    }
}
