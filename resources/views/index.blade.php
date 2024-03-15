
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
        <div class="intro-content">
            <h3>Workout Generator</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus eius, consequatur vel cupiditate iure rerum facere saepe fugit inventore quod atque molestias repellendus ratione possimus eaque esse asperiores dignissimos. Libero? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus eius, consequatur vel cupiditate iure rerum facere saepe fugit inventore quod atque molestias repellendus ratione possimus eaque esse asperiores dignissimos. Libero?
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-md-3">
                <h3>Settings</h3>
                <div class="setting-widget">
                    <form>
                        <div class="mb-4">
                            <label for="gender"  class="form-label">Gender</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Primary Goal</label>
                            <select  id="primary-goal" class="form-select">
                                <option value="Build Muscle" selected>Build Muscle</option>
                                <option value="Weight Loss">Weight Loss</option>
                                <option value="Flexibility">Flexibility</option>
                                <option value="Cardiovascular Endurance">Cardiovascular Endurance</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for=""  class="form-label">Workout Type</label>
                            <select  id="workout-type"class="form-select">
                                <option value="Weighted" selected>Weighted</option>
                                <option value="Flexibility And Balance">Flexibility And Balance</option>
                                <option value="High-Intensity Interval">High-Intensity Interval</option>
                                <option value="Circuit Training">Circuit Training</option>
                                <option value="Bodyweight Workout">Bodyweight Workout</option>
                                <option value="Functional Training">Functional Training</option>
                                <option value="Suspension Training">Suspension Training</option>
                                <option value="Aquatic Excercise">Aquatic Excercise</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Strength Level</label>
                            <select  id="strength-level" class="form-select">
                                <option value="Beginner" selected>Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advance">Advance</option>
                                <option value="Pro">Pro</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Workout Time</label>
                            <select  id="workout-time"  class="form-select">
                                <option value="15 Mins" selected>15 Mins</option>
                                <option value="30 Mins">30 Mins</option>
                                <option value="45 Mins">45 Mins</option>
                                <option value="1 hr">1 hr</option>
                                <option value="1.5 hr">1.5 hr</option>
                                <option value="2 hr">2 hr</option>
                            </select>
                        </div>

                        <div>
                            <label for="" class="form-label">Weight</label>
                            <input class="form-control" id="weight" value="30" type="number" min="30" max="400">
                        </div>

                        <div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Feet</label>
                                    <input class="form-control" id="feet"  type="number" min="3" value="3" max="8">
                                </div>
                                <div class="col-6">
                                    <label for="" class="form-label">Inches</label>
                                    <input class="form-control" id="inches"  type="number" value=0 min="0" max="11">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <h3>Pick Routine</h3>
                <div class="routine-widget">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Select Day</th>
                            <th scope="col">Time</th>
                            <th scope="col" style="width: 30%;">Muscles Group</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Monday" class="checkbox">
                                    <span>Monday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Tuesday"  class="checkbox">
                                    <span>Tuesday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Wednesday"  class="checkbox">
                                    <span>Wednesday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Thursday"  class="checkbox">
                                    <span>Thursday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Friday"  class="checkbox">
                                    <span>Friday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Saturday"  class="checkbox">
                                    <span>Saturday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" value="Sunday"  class="checkbox">
                                    <span>Sunday</span>
                                </td>
                                <td><input type="time"></td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="" selected>Choose muscles</option>
                                        <option value="Chest Muscles">Chest Muscles</option>
                                        <option value="Back Muscles">Back Muscles</option>
                                        <option value="Shoulder Muscles">Shoulder Muscles</option>
                                        <option value="Leg Muscles">Leg Muscles</option>
                                        <option value="Abdominal Muscles">Abdominal Muscles</option>
                                        <option value="Arms Muscles">Arms Muscles</option>
                                        <option value="Gluteal Muscles">Gluteal Muscles</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-save">Save & Start<i class="fas fa-spinner fa-spin loader mx-2 d-none text-white"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
<script src="{{asset('packages/validator.min.js')}}"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
        const checkboxes = document.querySelectorAll('.checkbox');

        checkboxes.forEach(checkbox => {
            const tr = checkbox.closest('tr');
            if (checkbox.checked) {
                tr.classList.add('day-selected');
            }

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    tr.classList.add('day-selected');
                } else {
                    tr.classList.remove('day-selected');
                }
            });
        });
    });


    $(document).on("click" , ".btn-save" , function(e){
        let primaryGoal= document.getElementById("primary-goal").value;
        let workoutType= document.getElementById("workout-type").value;
        let strengthLevel= document.getElementById("strength-level").value;
        let workoutTime= document.getElementById("workout-time").value;
        let weight= document.getElementById("weight").value;
        let feet= document.getElementById("feet").value;
        let inches= document.getElementById("inches").value;
        let gender= document.querySelector("input[name='gender']").value;
        let loader = document.querySelector(".loader");
        let checkboxes = document.querySelectorAll("input[type='checkbox']")
        let excerciseDays = [];
        let error = [];

        checkboxes.forEach(checkbox => {
            if(checkbox.checked){
                let day = checkbox.value;
                let tr = checkbox.closest("tr");
                let time = tr.querySelector("input[type='time']").value;
                let muscleType = tr.querySelector("select").value;

                let data = {
                    day : day,
                    time : time,
                    muscleType : muscleType
                }

                let validationError = checkError(data);
                validationError.length > 0 ? error.push(validationError) : excerciseDays.push(data);
            }

            if(error.length > 0){
                return 
            }

        })

        if(error.length > 0){
            let errorDetail = error.join(" ,");
            Swal.fire({
                title: 'Error!',
                text: errorDetail,
                icon: 'error',
            })
            return;
        }


        if(excerciseDays.length == 0){
            Swal.fire({
                title: 'Error!',
                text: 'Select At Least One Day',
                icon: 'error',
            })

            return;
        }


        let form = new FormData();
        
        form.append("goal" , primaryGoal);
        form.append("type" , workoutType);
        form.append("level" , strengthLevel);
        form.append("time" , workoutTime);
        form.append("weight" , weight);
        form.append("feet" , feet);
        form.append("inches" , inches);
        form.append("gender" , gender);
        form.append("routine" , JSON.stringify(excerciseDays));

        
        let url = "{{route('addWorkout')}}";
        addFormData(form , url , null , null , loader )

    })


    function checkError(data)
    {
        let validationError = [];
        for(let key in data)
        {
            if(validator.isEmpty(data[key])){
                let currentKey = splitCamelCase(key).toLowerCase();
                validationError.push(`${currentKey} must be required`);
            }
        }

        return validationError;

    }

    function splitCamelCase(str){
        return str.replace(/([a-z])([A-Z])/g, '$1 $2');
    }

    $(document).on("keydown" , "input[type='number']" , function(e){
        let element = e.target;
        let keyCode = e.keyCode;
        let value = element.value;
        let maximumValue = element.getAttribute('max');
        if(keyCode >= 48 && keyCode <= 57 )
        {
            let afterNumber = parseInt(value.toString()+e.key.toString())
            if(afterNumber > maximumValue){
                e.preventDefault();
            }
        }
    })

</script>
@endsection