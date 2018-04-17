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
        foreach ($taxiResponses as $taxiResponse){
            return TaxiRequest::all()->where('id', $taxiResponse->taxi_id);
        }      
    }

    public function unResponded()
    {
        $taxiRequests = TaxiRequest::all();
        foreach ($taxiRequests as $taxiRequest){  
            $taxiResponses = TaxiResponse::all();
            foreach ($taxiResponses as $taxiResponse){
                if($taxiRequest->id != $taxiResponse->taxi_id){
                    return $taxiRequest;
                }
            }
        }
    }
}
