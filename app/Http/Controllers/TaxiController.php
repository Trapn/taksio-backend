<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taxi;

class TaxiController extends Controller
{
    public function index()
    {
        return Taxi::all();
    }
 
    public function show($id)
    {
        return Taxi::find($id);
    }

    public function store(Request $request)
    {
        if ($request->has(['license_plate'])) {
            return Taxi::create($request->all());
        } else {
            echo "Wrong format to store";
        }     
    }
}
