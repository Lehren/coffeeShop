<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    public $name;

    protected $appends = [
        'name'
    ];

    /**
     * Option constructor.
     * @param $name
     */
    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function getNameAttribute()
    {
        return $this->name;
    }
}
