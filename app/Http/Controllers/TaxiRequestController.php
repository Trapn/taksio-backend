<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxiRequest;

class TaxiRequestController extends Controller
{
    public function index()
    {
        return taxi_request::all();
    }
 
    public function show($id)
    {
        return taxi_request::find($id);
    }

    public function store(Request $request)
    {
        if ($request->has(['location', 'destination'])) {
            return taxi_request::create($request->all());
        } else {
            echo "Wrong format to store";
        }     
    }
}
