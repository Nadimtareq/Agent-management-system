<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class timetabelModel extends Model
{

    protected $table = 'timetable';




    protected $fillable = [
        'date', 'start_time','end_time', 'created_by','updated_by','prospecit_id',
    ];


    public function createdBy(){

        return $this->belongsTo('App\Models\usersModel','created_by');
    }

    public function updatedBy(){

        return $this->belongsTo('App\Models\usersModel','updated_by');
    }

    public function prospecit(){

        return $this->belongsTo('App\Models\prospecitModel','prospecit_id');
    }



//    public function user(){
//
//        return $this->belongsTo('App\usersModel');
//    }
//
//    public function prospecit(){
//
//        return $this->belongsTo('App\prospecitModel');
//    }
    public function scopeMdate($query,$date)
    {
        return $query->where('date', '=', $date);
    }
    public function scopeEndtime($query,$time)
    {
        return $query->where('start_time', '<=', $time);
    }
    public function scopeStarttime($query,$time)
    {
        return $query->where('end_time', '>=', $time);
    }

    public function scopeStartpm($query,$time)
    {
        return $query->OrWhere('start_time', '>=', $time);
    }

}
