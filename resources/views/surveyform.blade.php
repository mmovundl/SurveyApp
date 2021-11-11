@extends('layouts.main')
@section('content')
<div class="container-xl">
    <div class="card mt-30">
        @if (session('message'))
        <div class="alert alert-danger" role="alert">
            {{ session('message') }}
        </div> 
        @endif
        <h5 class="card-header text-center">Survey Form</h5>
        <div class="card-body">
            <h5 class="card-title">Take our Survey</h5>
            <h6 class="card-title">Personal Details:</h6>
            
            <form action="{{route('form.add')}}" method="post">@csrf
                    <div class="form-group  w-50 ">
                        <label>Surname</label>
                        <input type="text" name="surname" class="form-control" value="" required>
                    </div>
                    <div class="form-group  w-50">
                        <label>First Names</label>
                        <input type="text" name="firstnames" class="form-control" value="" required>

                    </div>
                    <div class="form-group  w-50">
                        <label>Contact Number</label>
                        <input type="text" name="contactnumber" class="form-control" value="" required>
                    </div>
                    <div class="form-group w-50">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="" required>  
                    </div>
                    <div class="form-group w-25">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" value="" required>
                    </div>
                    <br>
                    <h6 class="card-title">What is your favourite food?(You can choose more than 1 answer)</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Pizza" name = "food[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pizza
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = "food[]" value="Pasta" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pasta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = "food[]" value="Pap and wors" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pap and wors
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = "food[]" value="Chicken stir fry" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Chicken stir fry
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = "food[]" value="Beef stir fry" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Beef stir fry
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name = "food[]" value="Other" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Other
                        </label>
                    </div>

                    <br>
                    <h6 class="card-title">On the scale of 1 to 5 indicate whether you strongly agree to strongly disagree.</h6>
                    <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Strongly Agree</th>
                        <th scope="col">Agree</th>
                        <th scope="col">Neutral</th>
                        <th scope="col">Disagree</th>
                        <th scope="col">Strongly Disagree</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">I like to eat out</th>
                        <td><input type="radio" name="eat_out" id="radio1"  value="{{1}}"/></td>
                        <td><input type="radio" name="eat_out" id="radio1" value="{{2}}"/></td>
                        <td><input type="radio" name="eat_out" id="radio1" value="{{3}}"/></td>
                        <td><input type="radio" name="eat_out" id="radio1" value="{{4}}"/></td>
                        <td><input type="radio" name="eat_out" id="radio1" value="{{5}}"/></td>>
                        </tr>
                        <tr>
                        <th scope="row">I like to watch movies</th>
                        <td><input type="radio" name="watch_movies" id="radio1" value="{{1}}"/></td>
                        <td><input type="radio" name="watch_movies" id="radio1" value="{{2}}"/></td>
                        <td><input type="radio" name="watch_movies" id="radio1" value="{{3}}"/></td>
                        <td><input type="radio" name="watch_movies" id="radio1" value="{{4}}"/></td>
                        <td><input type="radio" name="watch_movies" id="radio1" value="{{5}}"/></td>
                        </tr>
                        <tr>
                        <th scope="row">I like to watch TV</th>
                        <td><input type="radio" name="watch_tv" id="radio1" value="{{1}}"/></td>
                        <td><input type="radio" name="watch_tv" id="radio1" value="{{2}}"/></td>
                        <td><input type="radio" name="watch_tv" id="radio1" value="{{3}}"/></td>
                        <td><input type="radio" name="watch_tv" id="radio1" value="{{4}}"/></td>
                        <td><input type="radio" name="watch_tv" id="radio1" value="{{5}}"/></td>
                        </tr>
                        <tr>
                        <th scope="row">I like to listen to the radio</th>
                        <td><input type="radio" name="listen_radio" id="radio1" value="{{1}}"/></td>
                        <td><input type="radio" name="listen_radio" id="radio1" value="{{2}}"/></td>
                        <td><input type="radio" name="listen_radio" id="radio1" value="{{3}}"/></td>
                        <td><input type="radio" name="listen_radio" id="radio1" value="{{4}}"/></td>
                        <td><input type="radio" name="listen_radio" id="radio1" value="{{5}}"/></td>
                        </tr>
                    </tbody>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection