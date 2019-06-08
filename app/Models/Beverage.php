<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    public $possible_options;
    public $name;

    protected $appends = [
        'name',
        'possibleOptions'
    ];

    /**
     * Beverage constructor.
     * @param $possibleOptions
     * @param $name
     */
    public function __construct($name, $possibleOptions = [])
    {
        parent::__construct();
        $this->name = $name;
        $this->possible_options = $possibleOptions;
    }

    public function getNameAttribute()
    {
        return $this->name;
    }

    public function getPossibleOptionsAttribute()
    {
        return $this->possible_options;
    }
}
