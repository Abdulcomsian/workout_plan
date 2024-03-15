<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WorkoutNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:workout-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $day = date ( 'w' , strtotime(now()));
        $currentTime = \Carbon\Carbon::now();
        $afterOneHour = $currentTime->copy()->addHour(1);
        
        $routines = \App\Models\PlanRoutine::where('day' , $day)
                                            ->whereRaw("time BETWEEN '$currentTime' AND '$afterOneHour'")
                                            ->whereHas('plan' , function($query1){
                                                    $query1->where('status' , 1)
                                                    ->whereHas('user' , function($query2){
                                                        $query2->whereHas('latestSubscription', function($query3){
                                                            $query3->whereNull('ends_at');
                                                        });
                                                    });
                                                           
                                                })->with('workout' , 'plan.user')->get();

        foreach($routines as $routine)
        {
            $workout = $routine->workout->detail;
            \Mail::raw($workout, function ($message) use ($routine) {
                $message->to($routine->plan->user->email)
                        ->subject('Daily Workout Plan');
            });
        }
    }
}
