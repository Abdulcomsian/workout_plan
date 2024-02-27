
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
        <div class="action-bar">
            <a class="back" href="#">
                <img src="{{ URL::asset('build/images/back.svg') }}" alt="">
                Back
            </a>
            <div class="btn-group-right">
                <button class="btn-regenerate">Regenerate All</button>
                <button class="btn-submit-all">Submit All</button>
            </div>
        </div>
        <div class="generate-widgets">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget-generate">
                        <div class="widget-header">
                            <h3>Tuesday</h3>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/ep_edit.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="sub-header">
                            <h4>Chest and shoulder routine</h4>
                        </div>
                        <div class="widget-content">
                            <h4 class="content-title">
                                Main Workout:
                            </h4>
                            <ul>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group-right text-center mt-4">
                            <button class="btn-regenerate">Regenerate</button>
                            <button class="btn-submit-all">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-generate">
                        <div class="widget-header">
                            <h3>Wednesday</h3>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/ep_edit.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="sub-header">
                            <h4>Chest and shoulder routine</h4>
                        </div>
                        <div class="widget-content">
                            <h4 class="content-title">
                                Main Workout:
                            </h4>
                            <ul>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group-right text-center mt-4">
                            <button class="btn-regenerate">Regenerate</button>
                            <button class="btn-submit-all">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-generate">
                        <div class="widget-header">
                            <h3>Thursday</h3>
                            <a href="#">
                                <img src="{{ URL::asset('build/images/ep_edit.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="sub-header">
                            <h4>Chest and shoulder routine</h4>
                        </div>
                        <div class="widget-content">
                            <h4 class="content-title">
                                Main Workout:
                            </h4>
                            <ul>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 1 (3 Sets)
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Dumbbell Bench Press:
                                    <ul>
                                        <li>
                                            Reps: 12
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Superset 2 (3 sets)
                                </li>
                                <li>
                                    Dumbbell Flyes:
                                    <ul>
                                        <li>
                                            Reps: 15
                                        </li>
                                        <li>
                                            Rest: No rest, move directly to the next exercise.
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group-right text-center mt-4">
                            <button class="btn-regenerate">Regenerate</button>
                            <button class="btn-submit-all">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection