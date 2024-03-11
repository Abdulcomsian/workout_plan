<?php

namespace App\Http\Handlers;
use App\Models\{Plan , PlanRoutine , RoutineWorkout };

class WorkoutHandler{

    public function createWorkoutPlan($request , $aiHandler)
    {
        $weekDays = ['Monday' => 1,'Monday' => 2,'Monday' => 3,'Monday' => 4,'Monday' => 5,'Monday' => 6,'Monday' => 7];
        
        $plan = new Plan;
        $plan->gender = $request->gender;
        $plan->goal = $request->goal;
        $plan->type = $request->type;
        $plan->level = $request->level;
        $plan->time = $request->time;
        // $plan->save();

        // $routines=[];
        $days = [];
        $dailyGroup = [];
        foreach($request->routines as $routine)
        {
            $routines[] = [
                // 'plan_id' => $plan->id,
                'day' => $weekDays[$routine['day']],
                'time' => $routine['time'],
                'group' => $routine['group'],    
            ];

            $days[] =$routine['day'];
            $dailyGroup[] = [ $routine['day']  => $routine['group']];
        }

        $days = implode(", " , $days);

        $dailyGroupPrompt = 'On ';

        foreach($dailyGroup as $index => $group)
        {
            $day = array_keys($group)[0];
            $currentGroup = $group;
            sizeof($dailyGroup) > $index ? $dailyGroupPrompt .= $day.' target '.$currentGroup.', ':  $dailyGroupPrompt .= $day.' target '.$currentGroup.'.';
        }
        
        $prompt = "User with gender $request->gender requested a workout. Generate a personalized workout plan for $days. 
                   The user's goal is to $request->goal. User prefer a $request->type workout. The user can dedicate $request->time minutes  
                   workout session and prefers moderate to high-intensity workouts. They have access to basic
                   gym equipment including dumbbells, barbells, and a treadmill. $dailyGroupPrompt Please include
                   warm-up and cool-down routines in each session. Prompt should look like below text for each day.

                    Day 1: Monday
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

                   

                    [Create a similar workout plan for each day]";


        dd($prompt);


    }
}