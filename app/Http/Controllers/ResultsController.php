<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Food;
use App\Models\Rating;

class ResultsController extends Controller
{
    //
    public function getResults(){
        $totalSurveys = 0;
        $results = [];
        $foodPercent = [];
        $totalAge = 0;
        $averageAge = 0; 
        $maxAge = 0;
        $minAge = 0;
        $pizzaP = 0.0;
        $pastaP = 0.0;
        $papP = 0.0;
        $surveys = Survey::all();
        $totalSurveys = count($surveys);

        foreach($surveys as $item)
        {
            $totalAge += $item->age;
        }
        $averageAge = round($totalAge/$totalSurveys);

        foreach($surveys as $item)
        {
            if($item->age > $maxAge)
            {
                $maxAge = $item->age;
            }
        }
        foreach($surveys as $item)
        {
            if($minAge==0)
            {
                $minAge = $item->age;
            }
            else if($minAge > $item->age)
            {
                $minAge = $item->age;
            }
        }
        $pizzaP = $this->foodPercent($totalSurveys,'Pizza');
        $pastaP = $this->foodPercent($totalSurveys,'Pasta');
        $papP = $this->foodPercent($totalSurveys,'Pap and wors');

        $results=[
            'totalSurveys'=>$totalSurveys,
            'averageAge'=>$averageAge,
            'maxAge'=>$maxAge,
            'minAge'=>$minAge,
            'pastaP' =>$pastaP,
            ];
        $foodPercent = [
            'pasta'=>$pastaP,
            'pizza'=>$pizzaP,
            'pap'=>$papP

        ];
        $avrgRatings = $this->averageRatings();
        return view('surveyresults',compact('results','foodPercent','avrgRatings'));
    }

    public function foodPercent($nSurveys,$foodName){
        $nFood = Food::where('name','=',$foodName)->count();
        return (($nFood/$nSurveys)*100);
    }

    public function averageRatings(){
        $rating  = Rating::all();
        $totalEatout = 0;
        $totalWatchMovie = 0;
        $totalWatchTv = 0;
        $totalListenRadio = 0;
        $tot = 0;
        foreach($rating as $rate)
        {
            $totalEatout+=$rate->eat_out;
            $totalWatchMovie+=$rate->watch_movies;
            $totalWatchTv+=$rate->watch_tv;
            $totalListenRadio+=$rate->listen_radio;
            $tot++;
        }
        $avrgRatings = [
            'eat_out' => number_format($totalEatout/$tot,1),
            'watch_movies'=>number_format($totalWatchMovie/$tot,1),
            'watch_tv'=>number_format($totalWatchTv/$tot,1),
            'listen_radio'=>number_format($totalListenRadio/$tot,1)
        ];
        return $avrgRatings;
    }
}
