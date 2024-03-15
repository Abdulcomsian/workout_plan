
@extends('layouts.main')

@section('stylesheets')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
 
@endsection


@section('content')

@if(session('toastr'))
{!! session('toastr') !!}
@endif
<style>
    body{
        background: #fff;
    }
</style>
<section class="main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="welcome">
                    <h3>Hello {{auth()->user()->first_name.' '.auth()->user()->last_name}}</h3>
                    <p>
                        Welcome to your Account
                    </p>
                    <ul>
                        <li class="active">
                            <a href="{{url('subscription')}}">
                                <img src="{{ URL::asset('images/subscription.svg') }}" alt="">
                                My Subscription
                            </a>
                        </li>
                        <li>
                            <a href="{{url('profile')}}">
                                <img src="{{ URL::asset('images/user.svg') }}" alt="">
                                My Info
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}">
                                <img src="{{ URL::asset('images/sign-out.svg') }}" alt="">
                                Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="subscriptions">
                    <h3>My Subscription</h3>
                    <div class="subscription-tabs">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Active</button>
                              {{-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cancelled</button> --}}
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @if($user->latestSubscription && is_null($user->latestSubscription->ends_at))
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="active-sub">
                                    <div class="left">
                                        <h3>Daily Workout Subscription</h3>
                                        <span class="start-date"><b>Subscription Date :</b>{{$user->latestSubscription->created_at->format('d M, Y')}} </span>
                                        <span class="end-date"><b>Subscription End Date :</b> {{$user->latestSubscription->created_at->addMonth()->format('d M, Y')}}  </span>
                                        <button type="button" class="btn btn-cancel cancel-subscription">Cancel<i class="fas fa-spinner fa-spin loader mx-2 d-none text-white"></i></button>
                                    </div>
                                    <div class="right">
                                        <span class="total">Total : ${{number_format($plan->amount , 2)}}</span>
                                        <span class="status"><b>Status :</b> Subscribed</span>
                                        <span class="payment-method"><b>Payment Method :</b> Card</span>
                                    </div>
                                </div>
                            </div>
                            @else

                            <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="active-sub">
                                    @if(is_null($user->latestSubscription))
                                    <div class="left">
                                        <h3>You have not subscribed to any plan yet.</h3> 
                                    </div>
                                    @else
                                    <div class="left">
                                        <h3>Daily Workout Subscription</h3>
                                        <span class="start-date"><b>Subscription Date :</b> {{$user->latestSubscription->created_at->format('d M, Y')}} </span>
                                        <span class="end-date"><b>Subscription End Date :</b> {{$user->latestSubscription->ends_at->format('d M, Y')}} </span>
                                        <button type="button"  class="btn btn-cancel btn-active reactive-subscription">Re-Activate<i class="fas fa-spinner fa-spin loader mx-2 d-none text-white"></i></button>
                                    </div>
                                    <div class="right">
                                        <span class="total">Total : ${{number_format($plan->amount , 2)}}</span>
                                        <span class="status"><b>Status :</b> Cancelled</span>
                                        <span class="payment-method"><b>Payment Method :</b> Card</span>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            @endif
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script>
    

    $(document).on("click" , ".cancel-subscription" , function(e){
        e.preventDefault()
        let url = "{{route('cancelSubscription')}}";
        let loader = this.querySelector(".loader");
        let form = new FormData();
        let submitBtn = this;
        addFormData(form , url , reloadPage , submitBtn  , loader, null );
    })


    $(document).on("click" , ".reactive-subscription" , function(e){
        e.preventDefault()
        let url = "{{route('activateSubscription')}}";
        let loader = this.querySelector(".loader");
        let form = new FormData();
        let submitBtn = this;
        addFormData(form , url , reloadPage , submitBtn  , loader, null );
    })


    function reloadPage()
    {
        location.reload();
    }


  </script>
@endsection