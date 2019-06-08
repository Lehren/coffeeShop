<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Beverage extends Model
{
    protected $possibleOptions;
    protected $name;
}
