<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{PlanRoutine};

class RoutineWorkout extends Model
{
    use HasFactory;
    protected $table = 'routine_workout';
    protected $primaryKey = 'id';
    protected $fillable = ['routine_id' , 'detail' ];


    public function routine(){
        return $this->belongsTo(PlanRoutine::class , 'routine_id' , 'id');
    }
    
}
