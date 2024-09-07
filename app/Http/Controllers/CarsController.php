<?php

namespace App\Http\Controllers;

use App\Mail\CarFormEmail;
use App\Models\Car;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CarsController extends Controller
{
    public function create() {
        return Inertia::render('Cars/CreateCar');
    }

    public function save(Request $request) {
        $validated = $request->validate([
            'model_name' => 'required|max:255',
            'brand' => 'required|unique:App\Models\Car,brand|max:255',
            'color' => 'required|max:40',
            'year' => 'required|max:4',
            'release_date' => 'required|date',
        ]);

        Mail::to('recipient@example.com')->send(new CarFormEmail($validated));

        return Car::create([
            'model_name' => request('model_name'),
            'brand' => request('brand'),
            'color' => request('color'),
            'year' => request('year'),
            'release_date' => request('release_date'),
        ]);
    }
}
