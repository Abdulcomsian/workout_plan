
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
                            <label for="gender" class="form-label">Gender</label>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Primary Goal</label>
                            <select class="form-select">
                                <option selected>Build Muscle</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Workout Type</label>
                            <select class="form-select">
                                <option selected>Weighted</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Strength Level</label>
                            <select class="form-select">
                                <option selected>Beginner</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Workout Time</label>
                            <select class="form-select">
                                <option selected>60 Mins</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
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
                                    <input type="checkbox" class="checkbox">
                                    <span>Monday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose muscles</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" checked class="checkbox">
                                    <span>Tuesday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Legs Optimized</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" checked class="checkbox">
                                    <span>Wednesday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Biceps (Front of Chest)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" class="checkbox">
                                    <span>Thursday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose muscles</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" checked class="checkbox">
                                    <span>Friday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Shoulders</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" class="checkbox">
                                    <span>Saturday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose muscles</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td>
                                    <input type="checkbox" class="checkbox">
                                    <span>Sunday</span>
                                </td>
                                <td>4:00 AM </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose muscles</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-save">Save & Start</button>
                </div>
            </div>
        </div>
    </div>
</section>



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
</script>
@endsection