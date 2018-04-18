<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaxiRequest;
use App\TaxiResponse;
use App\Taxi;

class AnalyticsController extends Controller
{
    public function responded()
    {   
        $taxiResponses = TaxiResponse::where('taxi_request_id', !null)->get();
         foreach($taxiResponses->taxi_id as $id){
             echo $id;
         }
    }

    public function unResponded()
    {

    }
}
