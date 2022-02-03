<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\View\View;


class CalculatorController extends Controller
{
   
    public function index(Calculator $calculator): View
    {
        return view('calculator', [
            'operations' => $calculator->getOperations(),
        ]);
    }
}
