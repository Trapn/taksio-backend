<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxiResponse;

class TaxiResponseController extends Controller
{
    public function index()
    {
        return TaxiResponse::all();
    }
 
    public function show($id)
    {
        return TaxiResponse::find($id);
    }

    public function store(Request $request)
    {
        if ($request->has(['expected_time', 'price', 'taxi_id', 'taxi_request_id'])) {
            return TaxiResponse::create($request->all());
        } else {
            echo "Wrong format to store";
        }     
    }
}
