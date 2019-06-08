<?php

namespace App;

class Coffee extends Beverage
{
    protected $name = 'coffee';
    protected $possibleOptions = [
        Sugar::class,
        Milk::class
    ];
}
