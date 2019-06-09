<?php

namespace App\Http\Controllers;

use App\Models\VendingMachine;

class VendingMachineController extends Controller
{

    private $vendingMachine;

    /**
     * VendingMachineController constructor.
     * @param $vendingMachine
     */
    public function __construct(VendingMachine $vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function get()
    {
        return response()->json(
            $this->vendingMachine->getContents()
        );
    }

    public function getView()
    {
        return view('coffeeshop');
    }
}
