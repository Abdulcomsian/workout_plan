<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Handlers\UserHandler;

class UserController extends Controller
{
    protected $userHandler;

    function __construct(UserHandler $userHandler)
    {
        $this->userHandler = $userHandler;    
    }

    public function updateUsername(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "first_name" => "required|string",
            "last_name" => "required|string",
        ]);


        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{
            
            $response = $this->userHandler->updateUsername($request);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "password" => "required|string|confirmed",
            "previous_password" => 'required|string',
        ]);


        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{
            
            $response = $this->userHandler->updatePassword($request);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }

    public function updatePhone(Request $request)
    {
        $validator = Validator::make( $request->all() , [
            "phone" => "required|string",
        ]);


        if($validator->fails())
        {
             return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => implode(" ," ,$validator->messages()->all())]);
        }

        try{
            
            $response = $this->userHandler->updatePhone($request);

            return response()->json($response);
        }
        catch(\Exception $e)
        {
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
