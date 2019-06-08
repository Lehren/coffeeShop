<?php

namespace App\Models\Beverages\Coffee;

use App\Models\Beverages\Beverage;
use App\Models\Options\{Milk, Sugar};

class Coffee extends Beverage
{
    protected static $name = 'coffee';
    protected static $possibleOptions = [
        Sugar::class,
        Milk::class
    ];
}
