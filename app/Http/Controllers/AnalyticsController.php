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
            
            return TaxiRequest::where('id', $taxiResponse->taxi_id)->get();       
        }    
    }

    public function unResponded()
    {
        $unRespondedRequests = array();
        $taxiRequests = TaxiRequest::all();
        $taxiResponses = TaxiResponse::all();
        foreach ($taxiRequests as $taxiRequest){  
            foreach ($taxiResponses as $taxiResponse){
                if($taxiResponse->taxi_id !== $taxiRequest->id){
                    $unRespondedRequests[] = $taxiRequest;
                    
                }
            }
        }
        return $unRespondedRequests;
    }
}
