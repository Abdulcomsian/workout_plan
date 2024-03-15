
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

<style>
    .password-holder{
        position: relative;
    }
    .password-holder .fa-eye {
        position: absolute;
        top: 62%;
        z-index: 1;
        right: 10px;
        font-size: 22px;
        font-weight: lighter;
        cursor: pointer;
    }
</style>
 
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

<div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
    <form class="form" action="{{route('updateUsername')}}" method="POST" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="nameModalLabel">Update Name</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
              </div>
              <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name"  class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn theme-btn submit-btn">Save changes<i class="fas fa-spinner fa-spin submit-loader loader mx-2 d-none text-white"></i></button>
        </div>
      </div>
    </div>
    </form>
  </div>
  <div class="modal fade" id="numberModal" tabindex="-1" aria-labelledby="numberModalLabel" aria-hidden="true">
    <form  class="form" action="{{route('updatePhone')}}" method="POST">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="numberModalLabel">Update Phone</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn theme-btn submit-btn">Save changes<i class="fas fa-spinner fa-spin submit-loader loader mx-2 d-none text-white"></i></button>
        </div>
      </div>
    </div>
    </form>
  </div>
  <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <form class="form" method="POST" action="{{route('updatePassword')}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="passwordModalLabel">Update Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">Old Password</label>
                  <span class="password-holder">
                      <input type="password"  name="previous_password" class="form-control" placeholder="Old Password">
                      <img class="fa-eye" src="{{asset('images/eye.svg')}}" alt="">
                  </span>
              </div>
              <div class="mb-3">
                  <label class="form-label">New Password</label>
                  <span class="password-holder">
                      <input type="password" name="password" class="form-control" placeholder="New Password">
                      <img class="fa-eye" src="{{asset('images/eye.svg')}}" alt="">
                  </span>
              </div>
              <div class="mb-3">
                  <label class="form-label">Confirm Password</label>
                  <span class="password-holder">
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                      <img class="fa-eye" src="{{asset('images/eye.svg')}}" alt="">
                  </span>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn theme-btn submit-btn">Save changes<i class="fas fa-spinner fa-spin submit-loader loader mx-2 d-none text-white"></i></button>
        </div>
      </div>
    </div>
</form>
  </div>

<section class="main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="welcome">
                    <h3>Hello {{auth()->user()->first_name." ".auth()->user()->last_name}}</h3>
                    <p>
                        Welcome to your Account
                    </p>
                    <ul>
                        <li>
                            <a href="{{url('subscription')}}">
                                <img src="{{ URL::asset('images/subscription.svg') }}" alt="">
                                My Subscription
                            </a>
                        </li>
                        <li class="active">
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
                <div class="profile-info">
                    <h3 class="info-title">My Info</h3>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Your Name</h4>
                            <span>{{auth()->user()->first_name.' '.auth()->user()->last_name}}</span>
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
                            <span>{{auth()->user()->email}}</span>
                        </div>
                    </div>
                    <div class="info-sec">
                        <div class="content">
                            <h4>Phone Number</h4>
                            <span>{{auth()->user()->phone}}</span>
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

@endsection

@section('script')
<script>
    $(document).on("submit" , ".form" , function(e){
        e.preventDefault();
        let modal = this.closest(".modal");
        let loader = modal.querySelector(".loader");
        let url = this.getAttribute('action');
        let submitBtn = this.querySelector(".submit-btn")
        let form = new FormData(this);
        addFormData(form , url , ()=>{ closeModal(modal)} , submitBtn , loader )
    })


    function closeModal(modal){
        $(modal).modal('hide');
        location.reload();
    }

    $(document).on("click" , ".fa-eye" , function(e){
        let previousSibling = e.target.previousElementSibling;
        previousSibling.getAttribute('type') == 'text' ? previousSibling.setAttribute('type' , 'password') : previousSibling.setAttribute('type' , 'text'); 
    })
</script>
@endsection