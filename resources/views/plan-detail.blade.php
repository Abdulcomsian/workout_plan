
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
    .regenerate-loader{
        color: #01BAB3!important;
    }
</style>
 
@endsection


@section('content')

@if(session('toastr'))
{!! session('toastr') !!}
@endif

<section class="main-area">
    <div class="container">
        <div class="action-bar">
            <a class="back" href="#">
                <img src="{{ URL::asset('build/images/back.svg') }}" alt="">
                Back
            </a>
            <div class="btn-group-right">
                <button id="btn-regenerate" value="{{$plan->id}}">Regenerate All<i class="fas fa-spinner fa-spin regenerate-loader loader mx-2 d-none text-white"></i></button>
                <button id="btn-submit-all" value="{{$plan->id}}">Submit All<i class="fas fa-spinner fa-spin submit-loader loader mx-2 d-none text-white"></i></button>
            </div>
        </div>
        <div class="generate-widgets">
            <div class="row">
                @foreach($plan->routine as $routine)
                <div class="col-md-4">
                    <div class="widget-generate">
                        <div class="widget-header">
                            <h3>{{$weekdays[$routine->day]}}</h3>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/ep_edit.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="sub-header">
                            <h4>{{$routine->muscle}}</h4>
                        </div>
                        <div class="widget-content">
                            <h4 class="content-title">
                                Main Workout:
                            </h4>
                            <p>
                                {{-- @dd($routine->workout->detail) --}}
                                {!! str_replace("\n", "<br>" , $routine->workout->detail) !!}
                            </p>
                        </div>
                        <div class="btn-group-right text-center mt-4">
                            <button class="btn-regenerate" value="{{$routine->id}}">Regenerate<i class="fas fa-spinner fa-spin regenerate-loader loader mx-2 d-none text-white"></i></button>
                            <button class="btn-submit-all" value="{{$routine->workout->id}}">Submit<i class="fas fa-spinner fa-spin submit-loader loader mx-2 d-none text-white"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<script>
    $(document).on("click" ,".btn-regenerate" , function(e) {

            e.stopImmediatePropagation()
            let routine_id = this.value;
            let loader = this.closest(".widget-generate").querySelector(".loader");
            let html = this.closest(".widget-generate").querySelector("p");
            let url = "{{route('regenerateSingleWorkout')}}";
            let data = { routine_id : routine_id};
            updateHtml(url , data , html , null ,loader);

    })

    $(document).on("click" ,".btn-submit-all" , function(e) {

            e.stopImmediatePropagation()
            let workout_id = this.value;
            let form = new FormData;
            let loader =  this.closest(".widget-generate").querySelector(".submit-loader")
            let url = "{{route('updateWorkout')}}";
            form.append('workout_id' , workout_id );
            form.append('workout' , this.closest(".widget-generate").querySelector("p").innerHTML );
            addFormData( form , url  , null , null , loader);

    })

    document.querySelector("#btn-regenerate").addEventListener("click" , function(e){
        e.stopImmediatePropagation()
        let plan_id = this.value;
        let loader = this.querySelector(".loader");
        let html = document.querySelector(".generate-widgets");
        let url = "{{route('regenerateAllWorkout')}}";
        let data = { plan_id : plan_id};
        updateHtml(url , data , html , null ,loader);
    })


    document.querySelector("#btn-submit-all").addEventListener("click" , function(e){
        e.stopImmediatePropagation()

        let widget = document.querySelectorAll(".widget-generate");
        let dailyWorkout =[];
        let form = new FormData;
        let loader =  this.querySelector(".submit-loader")
        let url = "{{route('updatePlanWorkout')}}";
        widget.forEach(widget => {
            dailyWorkout.push({ id : widget.querySelector(".btn-submit-all").value , detail : widget.querySelector("p").innerHTML})
        })
        form.append('dailyWorkout' , JSON.stringify(dailyWorkout) );
        addFormData( form , url  , null , null , loader);
    })
</script>
@endsection