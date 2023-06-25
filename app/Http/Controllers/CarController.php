<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Http\Response;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
//        return view('dashboard', compact($cars));
        return view('dashboard', ['cars' => $cars]);
    }
}
