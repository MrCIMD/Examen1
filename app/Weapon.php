<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weapon extends Model
{
    use SoftDeletes; 

    protected $table = 'weapons';

    public $timestamps = true;

}
