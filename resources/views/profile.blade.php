
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
                    <h3>Hello John</h3>
                    <p>
                        Welcome to your Account
                    </p>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/subscription.svg') }}" alt="">
                                My Subscription
                            </a>
                        </li>
                        <li class="active">
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
            <div class="col-md-8 col-lg-9">
                <div class="profile-info">
                    <h3 class="info-title">My Info</h3>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Your Name</h4>
                            <span>John Doe</span>
                        </div>
                        <div class="action">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#nameModal">
                                change
                            </a>
                        </div>
                    </div>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Email Address</h4>
                            <span>johndoe@gmail.com</span>
                        </div>
                    </div>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Phone Number</h4>
                            <span>8980252445</span>
                        </div>
                        <div class="action">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#numberModal">
                                change
                            </a>
                        </div>
                    </div>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Password</h4>
                            <span>***********</span>
                        </div>
                        <div class="action">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#passwordModal">
                                change
                            </a>
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