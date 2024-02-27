
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
                    <h3 class="text-center">Get Started With MyWorkout!</h3>
                    <p class="text-center">Sign up to get daily workout routines texted to you.</p>
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">First Name*</label>
                                <input type="text" class="form-control" placeholder="Your first name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name*</label>
                                <input type="text" class="form-control" placeholder="Your surname">
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label class="form-label">Phone*</label>
                            <input type="text" class="form-control" placeholder="965-748-89-90">
                          </div>
                        <div class="col-md-12 mb-4">
                          <label class="form-label">Email*</label>
                          <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-md-12 mb-4 pass-with-view">
                          <label class="form-label">Password*</label>
                          <input type="password" class="form-control" placeholder="Enter your password">
                          <a href="#" class="view-pass">
                            <img src="{{ URL::asset('build/images/eye.svg') }}" alt="">
                          </a>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label class="form-label">Confirm Password*</label>
                            <input type="password" class="form-control" placeholder="Confirm your password">
                        </div>
                        <p class="accept-terms">
                            By signing up, you agree to our <a href="#">Terms, Privacy Policy</a> and <a href="#">Cookies Policy</a>.
                        </p>
                        <button type="submit" class="btn">Sign Up</button>
                    </form>
                    <p class="signup-link">
                        Already have an account? <a href="#">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection