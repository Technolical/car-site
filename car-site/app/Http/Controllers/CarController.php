<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    function index()
    {
        $cars = Car::all();
        return view('cars.index',['cars' => $cars]);
    }

    function add()
    {
        return view('cars.add');
    }

    function about()
    {
        return view('cars.about');
    }

    function store(Request $request)
    {
        $car = new Car();
        $car->owner = $request->owner;
        $car->lot = $request->lot;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->registration = $request->registration;
        $car->save();
        return redirect('/cars');
    }

    function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', ['car' => $car]);
    }

    function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', ['car' => $car]);
    }

    function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:cars,id',
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|max:4',
            'owner' => 'required|string|max:255',
            'lot' => 'required|string|max:3',
        ]);

        $car = Car::find($request->input('id'));

        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->owner = $request->input('owner');
        $car->lot = $request->input('lot');
        $car->registration = $request->input('registration');

        $car->save();

        return redirect('/cars');
    }

    function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:cars,id',
        ]);

        $car = Car::find($request->input('id'));

        $car->delete();

        return redirect('/cars');
    }
}
