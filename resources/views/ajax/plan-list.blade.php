<div class="row">
    @foreach($plan->routine as $index => $routine)
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
                    {!! str_replace("\n", "<br>" , $dailyWorkoutRoutine[$index]) !!}
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