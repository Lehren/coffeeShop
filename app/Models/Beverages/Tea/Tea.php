<?php

namespace App\Models\Beverages\Tea;

use App\Models\Beverages\Beverage;
use App\Models\Options\{Milk, Sugar};

abstract class Tea extends Beverage
{
    protected static $possibleOptions = [
        Milk::class,
        Sugar::class
    ];
}
