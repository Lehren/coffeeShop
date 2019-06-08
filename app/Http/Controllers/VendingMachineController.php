<?php

namespace App\Http\Controllers;

use App\Models\VendingMachine;
use Illuminate\Http\Request;

class VendingMachineController extends Controller
{

    private $vendingMachine;

    /**
     * VendingMachineController constructor.
     */
    public function __construct()
    {
        $this->vendingMachine = new VendingMachine();
    }

    public function get(Request $request)
    {
        return response()->json((
        $this->vendingMachine->getContents()
        ));


    }


}
