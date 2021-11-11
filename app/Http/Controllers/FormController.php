<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Survey;
use App\Models\Food;
use App\Models\Rating;
class FormController extends Controller
{
    //
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstnames'=>'required',
            'surname'=>'required',
            'contactnumber'=> 'required',
            'date' => 'required',
            'age' => 'required|min:5|max:120',
            'food'=>'required|array|min:1',
            'eat_out'=>'required',
            'watch_movies'=> 'required',
            'watch_tv'=>'required',
            'listen_radio'=>'required|integer|min:1|max:5'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('message','Please Fill Up The Missing fields');
        }
        //
        //Populate Survey Table
        $survey = new Survey;
        $survey->surname = $request->surname;
        $survey->firstnames = $request->firstnames;
        $survey->contacts = $request->contactnumber;
        $survey->age = $request->age;
        $survey->date = $request->date;
        $survey->save();

        //Populate Favourite food Table
        foreach($request->food as $item){
            $foodItem = new Food;
            $foodItem->name = $item;
            $foodItem->survey_id = $survey->id;
            $foodItem->save();
        }

        //Populate ratings Table
        $rating = new Rating;
        $rating->eat_out = $request->eat_out;
        $rating->watch_movies = $request->watch_movies;
        $rating->watch_tv = $request->watch_tv;
        $rating->listen_radio = $request->listen_radio;
        $rating->survey_id = $survey->id;
        $rating->save();
        return redirect('/')->with('surveyAdded','Thanks For Taking Our Survey');
    }

}
