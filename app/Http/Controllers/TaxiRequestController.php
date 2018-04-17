<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxiRequest;

class TaxiRequestController extends Controller
{
    public function index()
    {
        return TaxiRequest::all();
    }
 
    public function show($id)
    {
        return TaxiRequest::find($id);
    }

    public function store(Request $request)
    {
        if ($request->has(['location', 'destination'])) {
            return TaxiRequest::create($request->all());
        } else {
            echo "Wrong format to store";
        }     
    }
}
