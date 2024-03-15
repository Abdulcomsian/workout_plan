<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Stripe\{Stripe , SetupIntent};

class StripeController extends Controller
{
    protected $client = null;

    function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function createSetupIntent()
    {
        $setupIntent = SetupIntent::create([ 'usage' => 'on_session' ]);
        return response()->json(['status' => true , 'clientSecret' => $setupIntent->client_secret]);
    }

    public function addSubscription(Request $request)
    {
        try{
            $subscriptionPlan = SubscriptionPlan::first();
    
            if(!$request->user()->stripe_id){
                $request->user()->createAsStripeCustomer();
            }

            // dd($request->user()->stripe_id);
    
            $request->user()->updateDefaultPaymentMethod($request->payment_method);
    
            $subscription = $request->user()->newSubscription('default' , $subscriptionPlan->price_id)->create($request->payment_method);
            
            if($subscription){
                return response()->json(['status' => true , 'msg' => 'Subscription Added Successfully']);
            }else{
                return response()->json(['status' => false , 'msg' => 'Something Went Wrong While Adding Subscription' ]);
            }



        }catch(\Exception $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }

    }

    public function getSubscriptionPage()
    {
        $plan = SubscriptionPlan::first();
        return view('subscription')->with(['plan' => $plan]);
    }

    public function getPaymentPage()
    {
        $plan = SubscriptionPlan::first();
        return view('payment')->with(['plan' => $plan]);
    }
}
