
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

<div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="nameModalLabel">Update Name</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
              </div>
              <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn theme-btn">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="numberModal" tabindex="-1" aria-labelledby="numberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="numberModalLabel">Update Phone</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn theme-btn">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="passwordModalLabel">Update Password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">Old Password</label>
                  <input type="previous_password" class="form-control" placeholder="Old Password">
              </div>
              <div class="mb-3">
                  <label class="form-label">New Password</label>
                  <input type="password" class="form-control" placeholder="New Password">
              </div>
              <div class="mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password_confirmation" class="form-control" placeholder="Confirm Password">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn theme-btn">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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