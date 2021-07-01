<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
//Table name
    protected $table = 'forms';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

}