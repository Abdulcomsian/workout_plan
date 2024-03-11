<?php
namespace App\Http\Handlers;
use OpenAI\Laravel\Facades\OpenAI;

class AiHandler{

    public function generateAiWorkout($prompt)
    {
        $result = OpenAI::completions()->create([
            'model' => 'gpt-3.5-turbo',
            'prompt' => $prompt,
        ]);

        dd("openai generated text", $result);
    }

}
