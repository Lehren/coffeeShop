<?php

namespace App;

class Tea extends Beverage
{
    protected $possibleOptions = [
        Milk::class,
        Sugar::class
    ];
}
