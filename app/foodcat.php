<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodcat extends Model
{
    protected $table = 'foodcats';
    protected $primaryKey = 'fcid';
}
