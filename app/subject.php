<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $fillable = [
        'name', 'teacher_name','room'
    ];
}
