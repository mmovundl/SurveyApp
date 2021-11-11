<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'survey_id',
        'eat_out',
        'watch_movies',
        'watch_tv',
        'listen_radio'
    ];

    public function survey(){
        return $this->belongTo(Survey::class);
    }
}
