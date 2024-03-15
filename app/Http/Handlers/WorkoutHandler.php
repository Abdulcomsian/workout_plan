<?php

namespace App\Http\Handlers;
use App\Models\{Plan , PlanRoutine , RoutineWorkout };

class WorkoutHandler{

    public function createWorkoutPlan($request , $aiHandler)
    {
        $weekDays = ['Monday' => 1,'Tuesday' => 2,'Wednesday' => 3,'Thursday' => 4,'Friday' => 5,'Saturday' => 6,'Sunday' => 7];
        
        $plan = new Plan;
        $plan->gender = $request->gender;
        $plan->goal = $request->goal;
        $plan->type = $request->type;
        $plan->level = $request->level;
        $plan->time = $request->time;
        $plan->user_id = auth()->user()->id;
        $plan->save();

        // $routines=[];
        $days = [];
        $dailyGroup = [];

        $workoutRoutines = json_decode($request->routine);

        foreach($workoutRoutines as  $routine)
        {
            $routines[] = [
                'plan_id' => $plan->id,
                'day' => $weekDays[$routine->day],
                'time' => $routine->time,
                'muscle' => $routine->muscleType,   
            ];

            $days[] =$routine->day;
            $dailyGroup[] = [ $routine->day  => $routine->muscleType];
        }

        $days = implode(", " , $days);
        $dailyGroupPrompt = 'On ';
        
        // dd($dailyGroup);
        foreach($dailyGroup as $index => $group)
        {
            $day = array_keys($group)[0];
            $currentGroup = array_values($group)[0];
            sizeof($dailyGroup) > $index ? $dailyGroupPrompt .= $day.' target '.$currentGroup.', ':  $dailyGroupPrompt .= $day.' target '.$currentGroup.'.';
        }

        
        $prompt = "User with gender $request->gender requested a workout. Generate a personalized workout plan for $days. 
                   The user's goal is to $request->goal. User prefer a $request->type workout. The user can dedicate $request->time 
                   workout session and prefers moderate to high-intensity workouts. They have access to basic
                   gym equipment including dumbbells, barbells, and a treadmill. $dailyGroupPrompt Please include
                   warm-up and cool-down routines in each session. Prompt should look like below text for each day.

                    Monday
                    Warm-up:
                    - 5 minutes of light jogging on the treadmill
                    - Dynamic stretches for 5 minutes

                    Workout:
                    - Squats: 4 sets x 10 reps
                    - Bench press: 4 sets x 10 reps
                    - Bent-over rows: 4 sets x 10 reps
                    - Lunges: 3 sets x 12 reps (each leg)
                    - Plank: 3 sets x 30 seconds

                    Cool-down:
                    - 5 minutes of walking on the treadmill
                    - Static stretches for major muscle groups{{DAY_PLAN_ENDED}}

                   

                    [When a plan ends add a keywork {{DAY_PLAN_ENDED}}, Create a similar workout plan for each day]";


        $dailyWorkoutRoutine = explode('{{DAY_PLAN_ENDED}}' , $aiHandler->generateAiWorkout($prompt));
       
        foreach($routines as $index => $routine)
        {
            $thisRoutine = PlanRoutine::create($routine);

            RoutineWorkout::create(['routine_id' => $thisRoutine->id , 'detail' => $dailyWorkoutRoutine[$index] ]);

        }

        

        return ['status' => true , 'msg' => 'Workout Created Successfully'];


    }


    public function getPlanDetail($request)
    {   
        $plan = Plan::with('routine.workout')->where('id' , $request->id)->first();
        $weekDays = $this->getWeekDays();
        return ['status' => true , 'plan' => $plan ,'weekdays' => $weekDays];
    }

    public function regenerateWorkout($request , $aiHandler)
    {
        $planRoutine = PlanRoutine::with('plan')->where('id' , $request->routine_id)->first();
        $plan = $planRoutine->plan;
        $weekDays = $this->getWeekDays();
        $selectedWeekDay = $weekDays[$planRoutine->day];

        $prompt = "User with gender $planRoutine->gender requested a workout. Generate a personalized workout plan for $selectedWeekDay. 
                   The user's goal is to $plan->goal. User prefer a $plan->type workout. The user can dedicate $plan->time 
                   workout session and prefers moderate to high-intensity workouts. They have access to basic
                   gym equipment including dumbbells, barbells, and a treadmill. On $selectedWeekDay user target $planRoutine->muscle .Please include
                   warm-up and cool-down routines in each session. Prompt should look like below text for each day.

                    Monday
                    Warm-up:
                    - 5 minutes of light jogging on the treadmill
                    - Dynamic stretches for 5 minutes

                    Workout:
                    - Squats: 4 sets x 10 reps
                    - Bench press: 4 sets x 10 reps
                    - Bent-over rows: 4 sets x 10 reps
                    - Lunges: 3 sets x 12 reps (each leg)
                    - Plank: 3 sets x 30 seconds

                    Cool-down:
                    - 5 minutes of walking on the treadmill
                    - Static stretches for major muscle groups

                   

                    [Create a similar workout plan for $selectedWeekDay day]";

        $dailyWorkoutRoutine = str_replace("\n" , '</br>' , $aiHandler->generateAiWorkout($prompt));

        return ['status' => true , 'html' => $dailyWorkoutRoutine , 'msg' => 'Plan regenerated successfully'];

    }

    public function regenerateAllWorkout($request , $aiHandler)
    {
        $plan = Plan::with('routine.workout')->where('id' , $request->plan_id)->first();
        $weekDays = $this->getWeekDays();

        // $routines=[];
        $days = [];
        $dailyGroup = [];

        foreach($plan->routine as  $routine)
        {
            $days[] =$weekDays[$routine->day];
            $dailyGroup[] = [ $weekDays[$routine->day]  => $routine->muscle];
        }

        $days = implode(", " , $days);
        $dailyGroupPrompt = 'On ';
        
        // dd($dailyGroup);
        foreach($dailyGroup as $index => $group)
        {
            $day = array_keys($group)[0];
            $currentGroup = array_values($group)[0];
            sizeof($dailyGroup) > $index ? $dailyGroupPrompt .= $day.' target '.$currentGroup.', ':  $dailyGroupPrompt .= $day.' target '.$currentGroup.'.';
        }

        
        $prompt = "User with gender $plan->gender requested a workout. Generate a personalized workout plan for $days. 
                   The user's goal is to $plan->goal. User prefer a $plan->type workout. The user can dedicate $plan->time 
                   workout session and prefers moderate to high-intensity workouts. They have access to basic
                   gym equipment including dumbbells, barbells, and a treadmill. $dailyGroupPrompt Please include
                   warm-up and cool-down routines in each session. Prompt should look like below text for each day.

                    Monday
                    Warm-up:
                    - 5 minutes of light jogging on the treadmill
                    - Dynamic stretches for 5 minutes

                    Workout:
                    - Squats: 4 sets x 10 reps
                    - Bench press: 4 sets x 10 reps
                    - Bent-over rows: 4 sets x 10 reps
                    - Lunges: 3 sets x 12 reps (each leg)
                    - Plank: 3 sets x 30 seconds

                    Cool-down:
                    - 5 minutes of walking on the treadmill
                    - Static stretches for major muscle groups{{DAY_PLAN_ENDED}}

                   

                    [When a plan ends add a keywork {{DAY_PLAN_ENDED}}, Create a similar workout plan for each day]";

         $dailyWorkoutRoutine = explode('{{DAY_PLAN_ENDED}}' , $aiHandler->generateAiWorkout($prompt));


         $html = view('ajax.plan-list' , ['dailyWorkoutRoutine' => $dailyWorkoutRoutine , 'plan' => $plan , 'weekdays' => $this->getWeekDays()])->render();
         
         return ['status' => true , 'msg' => 'Workout Regenerated Successfully' , 'html' => $html];
    }

    public function changeWorkout($request)
    {
       $workout = RoutineWorkout::where('id' , $request->workout_id)->first();
       $workout->detail = $request->workout;
       $workout->save();

       return ['status' => true , 'msg' => 'Workout Updated'];
    }

    public function updatePlanWorkout($request)
    {
        $workouts = json_decode($request->dailyWorkout);

        foreach($workouts as $workout)
        {
            RoutineWorkout::where('id' , $workout->id)->update(['detail' => $workout->detail]);
        }

        return ['status' => true , 'msg' => 'Plan workout updated successfully'];

    }


    public function getWeekDays()
    {
        return ['Monday' , 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' ,'Saturday' , 'Sunday'];
    }
}