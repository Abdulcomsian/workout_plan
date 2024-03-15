<?php 
namespace App\Http\Handlers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserHandler{

    public function updateUsername($request)
    {
        User::where('id' , auth()->user()->id)->update([ 'first_name' => $request->first_name , 'first_name' => $request->last_name]);
        return [ 'status' => true , 'msg' => 'Username updated successfully'];
    }

    public function updatePassword($request)
    {
        if(Hash::check( $request->previous_password, auth()->user()->password))
        {
            User::where('id' , auth()->user()->id)->update([ 'password' => Hash::make($request->password)]);
            return [ 'status' => true , 'msg' => 'Password updated successfully'];
        }else{
            return [ 'status' => false , 'msg' => 'Your previous password doesnot match'];
        }
    }

    public function updatePhone($request)
    {
        User::where('id' , auth()->user()->id)->update([ 'phone' => $request->phone]);
        return [ 'status' => true , 'msg' => 'Phone number updated successfully'];
    }

}