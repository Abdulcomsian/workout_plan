
@extends('theme.main')

@section('stylesheets')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

@endsection


@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success! </strong>{{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong>{{session('error')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <!-- <h4 class="fs-16 mb-1">Good Morning, Admin!</h4>
                            <p class="text-muted mb-0">Here's what's happening with your store
                                today.</p> -->
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="container">
                      
                        <div class="gradient-cards">
                        <div class="row">
                            <div class="col-4">
                                <div class="card p-4">
                                  <div class="container-card bg-green-box">
                                    <img class="dashboard-card" width="60px"  src="{{asset('theme/images/dashboard/user.png')}}" alt="">
                                    <p class="card-title">Users: {{$subscribers}}</p>
                                  </div>
                                </div>

                            </div>

                            <div class="col-4">

                                <div class="card p-4">
                                  <div class="container-card bg-white-box">
                                    <img class="dashboard-card" width="60px" src="{{asset('theme/images/dashboard/exercise.png')}}" alt="">
                                    <p class="card-title">Plans: {{$plans}}</p>
                                  </div>
                                </div>

                            </div>


                            <div class="col-4">
                                <div class="card p-4">
                                  <div class="container-card bg-yellow-box">
                                    <img class="dashboard-card" width="60px" src="{{asset('theme/images/dashboard/money.png')}}" alt="">
                                    <p class="card-title">Amount: ${{$amount}}</p>
                                  </div>
                                </div>

                            </div>


                        </div>

                    
                        </div>
                      </div>
                </div>
            </div>

        </div> <!-- end .h-100-->

    </div> <!-- end col -->
</div>

<style>
    .addtool form label{
    font-weight: 600;
}

.upload-icon {
    display: block;
    text-align: center;
    cursor: pointer;
}
.upload-icon img{
    width: 80px;
    height: 80px;
    border-radius: 50px;
}
.upload-icon span{
    display: block;
    font-size:12px;
    font-weight: 600;
}
#IconUpload{
    display: none;
}
.addtool input:focus, section.addtool input :active, section.addtool input :visited {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
  border-right: 1px solid #E30B0B;
  border-color: #E30B0B;
}
</style>
@endsection
@section('script')
<script>
    $(document).on("click", ".del-cat", function(){
        let id = $(this).attr("data-id");
        $("#listingId").val(id);
        $(".bs-delete-modal-center").modal("show");
    });
</script>
@endsection