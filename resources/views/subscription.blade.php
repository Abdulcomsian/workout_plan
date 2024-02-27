
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
            <div class="col-md-3">
                <div class="welcome">
                    <h3>Hello John</h3>
                    <p>
                        Welcome to your Account
                    </p>
                    <ul>
                        <li class="active">
                            <a href="#">
                                <img src="{{ URL::asset('build/images/subscription.svg') }}" alt="">
                                My Subscription
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/user.svg') }}" alt="">
                                My Info
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/sign-out.svg') }}" alt="">
                                Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="subscriptions">
                    <h3>My Subscription</h3>
                    <div class="subscription-tabs">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Active</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Cancelled</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="active-sub">
                                    <div class="left">
                                        <h3>Daily Workout Subscription</h3>
                                        <span class="start-date"><b>Subscription Date :</b> 1 Jan, 2024 2:40 PM </span>
                                        <span class="end-date"><b>Subscription End Date :</b> 8 June, 2024  </span>
                                        <button class="btn btn-cancel">Cancel</button>
                                    </div>
                                    <div class="right">
                                        <span class="total">Total : $20.00</span>
                                        <span class="status"><b>Status :</b> Subscribed</span>
                                        <span class="payment-method"><b>Payment Method :</b> Card</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <div class="active-sub">
                                    <div class="left">
                                        <h3>Daily Workout Subscription</h3>
                                        <span class="start-date"><b>Subscription Date :</b> 1 Jan, 2024 2:40 PM </span>
                                        <span class="end-date"><b>Subscription End Date :</b> 8 June, 2024  </span>
                                        <button class="btn btn-cancel">ReActive</button>
                                    </div>
                                    <div class="right">
                                        <span class="total">Total : $20.00</span>
                                        <span class="status"><b>Status :</b> Cancelled</span>
                                        <span class="payment-method"><b>Payment Method :</b> Card</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
</section>
<script>
    const div1 = document.getElementById('check-card');
    const div2 = document.getElementById('check-bank');
  
    div1.addEventListener('click', function() {
      div1.classList.add('checked');
      div2.classList.remove('checked');
    });
  
    div2.addEventListener('click', function() {
      div2.classList.add('checked');
      div1.classList.remove('checked');
    });
  </script>
@endsection