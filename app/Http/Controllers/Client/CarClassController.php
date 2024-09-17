<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CarClass;
use Illuminate\Http\Request;

class CarClassController extends Controller
{
    public function index(CarClass $carClass)
    {
        return view('pages.service', [
            'carClass' => $carClass,
        ]);
    }
}
