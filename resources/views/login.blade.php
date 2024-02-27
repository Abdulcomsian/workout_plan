
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

<section class="main-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="login-sec">
                    <div class="logo text-center">
                        <img src="{{ URL::asset('build/images/logo.svg') }}" alt="">
                    </div>
                    <h3 class="text-center">Welcome to MyWorkout</h3>
                    <p class="text-center">Sign in to continue</p>
                    <form>
                        <div class="mb-4">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="mb-4 pass-with-view">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" placeholder="Enter your password">
                          <a href="#" class="view-pass">
                            <img src="{{ URL::asset('build/images/eye.svg') }}" alt="">
                          </a>
                        </div>
                        <a href="#" class="text-end d-block forgot-pass">Forgot Password</a>
                        <button type="submit" class="btn">Log In</button>
                    </form>
                    <p class="signup-link">
                        Don’t have an account? <a href="#">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection