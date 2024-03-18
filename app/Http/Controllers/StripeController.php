<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;
use Stripe\{Stripe , SetupIntent};
use App\Models\{Plan , User , SubscriptionAmount};
use Stripe\PaymentMethod;

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
    
            $request->user()->updateDefaultPaymentMethod($request->payment_method);
    
            $subscription = $request->user()->newSubscription('default' , $subscriptionPlan->price_id)->create($request->payment_method);
            
            if($subscription){
                Plan::where('id' , $request->plan_id)->update(['status' => 1]);
                SubscriptionAmount::create(['user_id' => auth()->user()->id , 'amount' => $subscriptionPlan->amount]);
                return response()->json(['status' => true , 'msg' => 'Subscription Added Successfully' , 'redirectUrl' => url('subscription')]);
            }else{
                return response()->json(['status' => false , 'msg' => 'Something Went Wrong While Adding Subscription' ]);
            }



        }catch(\Exception $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }

    }

    public function getSubscriptionPage()
    {
        $user = User::with('latestSubscription')->where('id' , auth()->user()->id)->first();
        $plan = SubscriptionPlan::first();
        return view('subscription')->with(['plan' => $plan , 'user' => $user]);
    }

    public function getPaymentPage(Request $request)
    {
        $plan = SubscriptionPlan::first();
        return view('payment')->with(['plan' => $plan, 'id' => $request->id]);
    }

    public function cancelSubscription()
    {
        $user = User::where('id' , auth()->user()->id)->first();
        $user->subscription('default')->cancel();
        return response()->json(['status' => true , 'msg' => 'Subscription cancelled successfully']);
    }

    public function activateSubscription()
    {
        try{
            $user = User::with('latestSubscription')->where('id' , auth()->user()->id)->first();
            if(!is_null($user->latestSubscription->ends_at) && !$user->latestSubscription->onGracePeriod())
            {
                $user->latestSubscription->resume();
            }else{
                $plan = SubscriptionPlan::first();
                $paymentMethod = PaymentMethod::all(['customer' => $user->stripe_id])['data'][0]->id;
                $user->newSubscription('default', $plan->price_id)->create($paymentMethod);
            }
            return response()->json(['status' => true , 'msg' => 'Subscription resumed successfully']);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }
}
