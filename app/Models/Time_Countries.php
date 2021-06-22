<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time_Countries extends Model
{
    use HasFactory;
    protected $table = 'time_countries';

    public function countries(){
        return $this->belongsTo('App/Models/Countries');
    }
}
