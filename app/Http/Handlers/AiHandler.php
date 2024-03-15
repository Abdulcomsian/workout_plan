<?php
namespace App\Http\Handlers;
use OpenAI\Laravel\Facades\OpenAI;

class AiHandler{

    public function generateAiWorkout($prompt)
    {

        $result = OpenAI::chat()->create([
                            'model' => 'gpt-3.5-turbo',
                            'messages' => [
                                ['role' => 'system', 'content' => 'You:'],
                                ['role' => 'user', 'content' => $prompt]
                            ]
                        ]);


        $dailyWorkoutRoutine = $result['choices'][0]['message']['content'];

        return $dailyWorkoutRoutine;
    }

}
