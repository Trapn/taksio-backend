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
        $taxiResponses = TaxiResponse::all()->where('taxi_request_id', !null);
        foreach($taxiResponses as $taxiResponse){
            $respondedRequests[] = TaxiRequest::where('id', $taxiResponse->taxi_request_id)->get();
        }
        return $respondedRequests;
    }

    public function unResponded()
    {
        
    }
}
