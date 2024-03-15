<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Handlers\{WorkoutHandler, AiHandler , TwillioHandler}; 
use Illuminate\Support\Facades\Validator;

class WorkoutController extends Controller
{
    protected $workoutHandler;
    protected $aiHandler;
    protected $twilioHandler;

    function __construct(WorkoutHandler $workoutHandler , AiHandler $aiHandler , TwillioHandler $twilioHandler )
    {
        $this->workoutHandler = $workoutHandler;
        $this->aiHandler = $aiHandler;
        $this->twilioHandler = $twilioHandler;
    }

    public function createWorkoutPlan(Request $request)
    {

        $validator = Validator::make( $request->all() , [
            "gender" => "required|string",
            "goal" => "required|string",
            "type" => "required|string",
            "level" => "required|string",
            "time" => 'required|string',
            "weight" => 'required|numeric',
            "feet" => 'required|numeric',
            "inches" => 'required|numeric',
            "routine" => "required|json"
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

    public function planDetail(Request $request)
    {
        try{
            $response = $this->workoutHandler->getPlanDetail($request);
            return view('plan-detail')->with($response);
        }catch(\Exception $e){
            return redirect()->back()->with('error' , $e->getMessage());
        }
    }


    public function regenerateSingleWorkout(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "routine_id" => "required|numeric",
        ]);


        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{

            $response = $this->workoutHandler->regenerateWorkout($request , $this->aiHandler);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }


    public function regenerateAllWorkout(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "plan_id" => "required|numeric",
        ]);


        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{

            $response = $this->workoutHandler->regenerateAllWorkout($request , $this->aiHandler);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }

    public function updateWorkout(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "workout_id" => "required|numeric",
            'workout' => "required|string"
        ]);

        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{

            $response = $this->workoutHandler->changeWorkout($request , $this->aiHandler);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }

    public function updatePlanWorkout(Request $request)
    {
        try{

            $response = $this->workoutHandler->updatePlanWorkout($request);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        } 
    }

    public function test(){
        $this->twilioHandler->sendSMS("Hello there how are you" , "+923115818727");
    }

    public function testCron(){
        // Carbon\Carbon::
    }
}
