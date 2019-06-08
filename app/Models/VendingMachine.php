<?php

namespace App\Models;

class VendingMachine
{
    private $contents;

    /**
     * VendingMachine constructor.
     */
    public function __construct()
    {
        $milkOption = new Option('Milk');
        $sugarOption = new Option('Sugar');

        $blackTea = new Beverage('Black tea', [$milkOption, $sugarOption]);
        $greenTea = new Beverage('Green tea', [$milkOption, $sugarOption]);
        $coffee = new Beverage('Coffee', [$milkOption, $sugarOption]);
        $vegetableSoup = new Beverage('Vegetable soup');
        $chickenSoup = new Beverage('Chicken soup');
        $tomatoSoup = new Beverage('Tomato soup');

        $this->contents = [
//            'Soups' => [
                $vegetableSoup,
                $chickenSoup,
            $tomatoSoup,
//            ],
//            'Teas' => [
                $blackTea,
            $greenTea,

            $coffee
//            ],
//            'Coffee' => $coffee
        ];
    }

    public function getContents()
    {
        return $this->contents;
    }

}
