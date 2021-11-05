<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            text-align:center;
            margin-top:70px
        }
        .card{
             box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
        }
    </style>
</head>
<body>
        <div class="container-xl">
            <div class="card mt-30">
                <h5 class="card-header text-center">Survey Form</h5>
                <div class="card-body">
                    <h5 class="card-title">Take our Survey</h5>
                    <h6 class="card-title">Personal Details:</h6>
                    
                    <form action="" method="post">
                            <div class="form-group  w-50 ">
                                <label>Surname</label>
                                <input type="text" name="surname" class="form-control" value="">
                            </div>
                            <div class="form-group  w-50">
                                <label>First Names</label>
                                <input type="text" name="firstnames" class="form-control" value="">

                            </div>
                            <div class="form-group  w-50">
                                <label>Contact Number</label>
                                <input type="text" name="contactnumber" class="form-control" value="">
                            </div>
                            <div class="form-group w-50">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" value="">  
                            </div>
                            <div class="form-group w-25">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control" value="">
                            </div>
                            <br>
                            <h6 class="card-title">What is your favourite food?(You can choose more than 1 answer)</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pizza
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pasta
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pap and wors
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Chicken stir fry
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                Beef stir fry
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Other
                                </label>
                            </div>

                            <br>
                            <h6 class="card-title">On the scale of 1 to 5 indicate whether you strongly agree to strongly disagree</h6>
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
                                <td><input type="radio" name="radios1" id="radio1" /></td>
                                <td><input type="radio" name="radios1" id="radio1" /></td>
                                <td><input type="radio" name="radios1" id="radio1" /></td>
                                <td><input type="radio" name="radios1" id="radio1" /></td>
                                <td><input type="radio" name="radios1" id="radio1" /></td>>
                                </tr>
                                <tr>
                                <th scope="row">I like to watch movies</th>
                                <td><input type="radio" name="radios2" id="radio1" /></td>
                                <td><input type="radio" name="radios2" id="radio1" /></td>
                                <td><input type="radio" name="radios2" id="radio1" /></td>
                                <td><input type="radio" name="radios2" id="radio1" /></td>
                                <td><input type="radio" name="radios2" id="radio1" /></td>
                                </tr>
                                <tr>
                                <th scope="row">I like to watch TV</th>
                                <td><input type="radio" name="radios3" id="radio1" /></td>
                                <td><input type="radio" name="radios3" id="radio1" /></td>
                                <td><input type="radio" name="radios3" id="radio1" /></td>
                                <td><input type="radio" name="radios3" id="radio1" /></td>
                                <td><input type="radio" name="radios3" id="radio1" /></td>
                                </tr>
                                <tr>
                                <th scope="row">I like to listen to the radio</th>
                                <td><input type="radio" name="radios4" id="radio1" /></td>
                                <td><input type="radio" name="radios4" id="radio1" /></td>
                                <td><input type="radio" name="radios4" id="radio1" /></td>
                                <td><input type="radio" name="radios4" id="radio1" /></td>
                                <td><input type="radio" name="radios4" id="radio1" /></td>
                                </tr>
                               
                            </tbody>
                            </table>
                    </form>
                
                
                    <br>
                    <a href="#" class="btn btn-primary ">Submit</a>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>