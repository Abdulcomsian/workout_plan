<?php

namespace App\Http\Handlers;
use Twilio\Rest\Client;

class TwillioHandler{
    protected $client;
    protected $fromNumber;

    function __construct() {
        $sid = env('TWILLIO_SID');
        $token = env('TWILLIO_AUTH_TOKEN');

        $this->fromNumber = env('TWILLIO_FROM');
        $this->client = new Client($sid , $token);
    }

    public function sendSMS($message , $number)
    {
        try{
            $message = $this->client->messages->create(
                $number,
                [
                    'from' => $this->fromNumber,
                    'body' => $message
                ]
            );


        }catch(\Exception $e){
            \Log::info("message ".$e->getMessage());
        }
    }
}