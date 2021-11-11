<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable = [
        'surname',
        'firstname',
        'contacts',
        'date',
        'age' 
    ];

    public function food(){
        return $this->hasMany(Food::class);
    }
    public function rating(){
        return $this->hasMany(Rating::class);
    }
}
