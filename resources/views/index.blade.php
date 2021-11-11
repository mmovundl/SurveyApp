@extends('layouts.main')
@section('content')

<div class="container">
  @if (session('surveyAdded'))
        <div class="alert alert-success" role="alert">{{ session('surveyAdded') }}</div> 
  @endif
<div class="card text-center">
    
    <div class="card-body">
      <h5 class="card-title">Welcome to our survey</h5>
      <p class="card-text">Please click one of the buttons bellow to take part in our survey</p>
      <a role="button" href="{{route('surveyform')}}" class="btn btn-outline-secondary">Fill out the survey</a>
      <br>
      <br>
      <a role="button" href="{{route('results.results')}}"class="btn btn-outline-info">View survey results</a>
    </div>
    
  </div>
</div>
  @endsection