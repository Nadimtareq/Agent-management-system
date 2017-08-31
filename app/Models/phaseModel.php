<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phaseModel extends Model
{
    protected $table = "phase";
    protected $fillable = [
        'title', 'summary', 'created_by','updated_by'
    ];

    public function createdBy(){

        return $this->belongsTo('App\Models\usersModel','created_by');
    }
    public function updatedBy(){

        return $this->belongsTo('App\Models\usersModel','updated_by');
    }

    public function prospecit(){

        return $this->hasMany('App\Models\prospecitModel');
    }


}
