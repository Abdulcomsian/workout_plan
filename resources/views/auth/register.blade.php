@extends('layouts.main')

@section('stylesheets')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
 <style>
    #phone{
        width: 465px!important;
    }
 </style>
@endsection


@section('content')

@if(session('toastr'))
{!! session('toastr') !!}
@endif

<section class="main-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-5 col-md-10">
                <div class="login-sec">
                    <div class="logo text-center">
                        <img src="{{ URL::asset('images/logo.svg') }}" alt="">
                    </div>
                    <h3 class="text-center">Get Started With MyWorkout!</h3>
                    <p class="text-center">Sign up to get daily workout routines texted to you.</p>
                    <form method="POST" id="user-form" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="form-label">First Name*</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Your first name">
                                @error('first_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Last Name*</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Your surname">
                                @error('last_name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-12 mb-4">
                            <label class="form-label">Phone*</label>
                            <input type="text" name="phone" class="form-control" placeholder="965-748-89-90">
                            @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div> --}}

                        <div class="col-md-12 mb-4">
                            <div>
                                <label class="form-label">Phone*</label>
                            </div>
                            <input type="text" id="phone" name="phone" class="form-control">
                            @error('phone')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                          <label class="form-label">Email*</label>
                          <input type="email" name="email" class="form-control" placeholder="Email address">
                          @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                        </div>
                        <div class="col-md-12 mb-4 pass-with-view">
                          <label class="form-label">Password*</label>
                          <input type="password" name="password" class="form-control" placeholder="Enter your password">
                          <a href="javascript:void(0)" class="view-pass">
                              <img src="{{ URL::asset('images/eye.svg') }}" alt="">
                            </a>
                            @error('password')
                                      <span class="text-danger" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                            <label class="form-label">Confirm Password*</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password">
                        </div>
                        <p class="accept-terms">
                            By signing up, you agree to our <a href="#">Terms, Privacy Policy</a> and <a href="#">Cookies Policy</a>.
                        </p>
                        <button type="submit" class="btn">Sign Up</button>
                    </form>
                    <p class="signup-link">
                        Already have an account? <a href="{{route('login')}}">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    $(document).ready(function() {
      // Initialize intlTelInput
      
    document.querySelector(".view-pass").addEventListener("click" , function(e){
        let passwordField = document.querySelector('input[name="password"]');
        passwordField.getAttribute('type') == 'password' ? passwordField.setAttribute('type' , 'text') :  passwordField.setAttribute('type' , 'password'); 
    })

    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    });

    $(document).on("submit" , "#user-form" , function(e){
        e.preventDefault();
        let phoneNumber = $('#phone').val();

        

        if (phoneNumber) {
            var iti = window.intlTelInputGlobals.getInstance(input);
            prefix = iti.getSelectedCountryData().dialCode;
        }else{
            Swal.fire({
                        title: 'Error',
                        text: 'Please add phone number',
                        icon: 'error',
                    })
            return;
        }
        document.querySelector('input[name="phone"]').value = "+"+prefix+phoneNumber
        this.submit();
        
    })
    
})
</script>

@endsection