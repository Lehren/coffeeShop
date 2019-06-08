<?php

namespace App\Models\Beverages;

use Illuminate\Database\Eloquent\Model;

abstract class Beverage extends Model
{
    protected static $possibleOptions;
    protected static $name;
}
