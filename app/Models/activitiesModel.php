<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activitiesModel extends Model
{

    protected $table = 'activities';
    protected $fillable = [
        'prospecit_id', 'remarks','date', 'start_time','end_time', 'created_by','updated_by',
    ];

    public function prospecit(){

        return $this->belongsTo('App\Models\prospecitModel','prospecit_id');
    }

    public function createdBy(){

        return $this->belongsTo('App\Models\usersModel','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Models\usersModel','updated_by');
    }




}
