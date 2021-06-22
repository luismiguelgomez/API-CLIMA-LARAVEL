<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function messages(){
        return $this->hasMany('App/Models/Messages');
    }

    protected $casts = [
        'type_user' => 'boolean'
    ];
}
