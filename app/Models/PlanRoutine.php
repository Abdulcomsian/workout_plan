<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Plan , RoutineWorkout};

class PlanRoutine extends Model
{
    use HasFactory;
protected $table = 'plan_routine';
protected $primaryKey = 'id';
protected $fillable = ['plan_id','day', 'time' , 'muscle'  ];


public function workout(){
    return $this->hasOne(PlanRoutine::class , 'routine_id' , 'id');
}

public function plan(){
    return $this->belongsTo(Plan::class , 'plan_id' , 'id');
}
}
