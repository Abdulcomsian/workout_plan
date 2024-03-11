<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Handlers\{WorkoutHandler, AiHandler}; 
use Illuminate\Support\Facades\Validator;

class WorkoutController extends Controller
{
    protected $workoutHandler;
    protected $aiHandler;

    function __construct(WorkoutHandler $workoutHandler , AiHandler $aiHandler )
    {
        $this->workoutHandler = $workoutHandler;
        $this->aiHandler = $aiHandler;
    }

    public function addWorkout(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "gender" => "required|string",
            "goal" => "required|string",
            "type" => "required|string",
            "level" => "required|string",
            "time" => 'required|numeric',
            "routine" => "required|array|min:1",
            "routine.*.day" => "required|string",
            "routine.*.time" => "required|date_format:H:i",
            "routine.*.group" => "required|string",
        ]); 

        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{

            $response = $this->workoutHandler->createWorkoutPlan($request , $this->aiHandler);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }
}
