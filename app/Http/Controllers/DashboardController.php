<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\{ User , Plan , SubscriptionAmount};

class DashboardController extends Controller
{
    public function getDashboard()
    {
        $totalSubscribers = User::role('user')->count();

        $plans = Plan::count();

        $subscriptionAmount = SubscriptionAmount::sum('amount');

        return view('theme.dashboard')->with(['plans' => $plans , 'subscribers' => $totalSubscribers , 'amount' => $subscriptionAmount  ]);
    }

    public function subscribers()
    {
        return view('theme.subscriber');
    }

    public function getSubscribers()
    {
        $subscribers = User::role('user')->get();

        return DataTables::of($subscribers)
              ->addIndexColumn()
              ->addColumn('name' , function($subscriber){
                return $subscriber->first_name.' '.$subscriber->last_name;
              })
              ->addColumn('email' , function($subscriber){
                return $subscriber->email;
              })
              ->addColumn('phone' , function($subscriber){
                return $subscriber->phone;
              })
              ->rawColumns(['name' , 'email' , 'phone'])
              ->make(true);
    }
}
