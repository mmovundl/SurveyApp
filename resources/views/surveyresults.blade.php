@extends('layouts.main')
@section('content')
        <div class="container">
            <div class="card">
            <div class="heading"><h3>Results</h3></div>
            <div>
                <div class="infoRes p-spacing">
                    <p>Total number of surveys: {{$results['totalSurveys']}}</p>
                    <p>Average Age: {{$results['averageAge']}}</p>
                    <p>Oldest person who participate in survey: {{$results['maxAge']}}</p>
                    <p>Youngest person who participate in survey: {{$results['minAge']}}</p>
                </div>
                
                <div class='foodRes p-spacing'>
                    <p>Percentage of people who like Pizza: {{number_format($foodPercent['pizza'],1)}}%</p>
                    <p>Percentage of people who like Pasta: {{number_format($foodPercent['pasta'],1)}}%</p>
                    <p>Percentage of people who like Pap wors: {{number_format($foodPercent['pap'],1)}}%</p>
                </div>    
                
                <div class="ratingRes">
                    <p>People like to eat out: {{$avrgRatings['eat_out']}}</p>
                    <p>People like to watch movies: {{$avrgRatings['watch_movies']}}</p>
                    <p>People like to watch TV: {{$avrgRatings['watch_tv']}}</p>
                    <p>People like to listen to the radio: {{$avrgRatings['listen_radio']}}</p>
                </div>

                <div>
                    <a role="button" href="{{route('/')}}"class="btn btn-outline-info">Ok</a>
                </div>
            </div>
        </div>
        </div>
@endsection