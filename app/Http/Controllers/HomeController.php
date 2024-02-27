<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Repository\UserHandler;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Notifications\SendEmailForgotPassword;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class HomeController extends Controller
{
      
    public function index()
    {
        return view('index');
    }
    public function generate()
    {
        return view('generate');
    }
    public function login()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function payment()
    {
        return view('payment');
    }
    public function subscription()
    {
        return view('subscription');
    }
}