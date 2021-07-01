<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termi extends Model
{
//Table name
    protected $table = 'termis';

    //Primary key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

}
