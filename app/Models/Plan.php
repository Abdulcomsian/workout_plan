<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{PlanRoutine , User};

class Plan extends Model
{
    use HasFactory;
    protected $table = 'plans';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','gender', 'goal' , 'type' , 'level' , 'time' , 'status' ];



    public function routine(){
        return $this->hasMany(PlanRoutine::class , 'plan_id' , 'id');
    }
    
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }

   
}
