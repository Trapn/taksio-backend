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
        $respondedRequests = array();
        $taxiResponses = TaxiResponse::all()->where('taxi_request_id', !null);
        foreach ($taxiResponses as $taxiResponse){
            $respondedRequests[] = TaxiRequest::all()->where('id', $taxiResponse->taxi_id);
        }
        return $respondedRequests;      
    }

    public function unResponded()
    {
        $unRespondedRequests = array();
        $taxiRequests = TaxiRequest::all();
        foreach ($taxiRequests as $taxiRequest){  
            $taxiResponses = TaxiResponse::all();
            foreach ($taxiResponses as $taxiResponse){
                if($taxiRequest->id != $taxiResponse->taxi_id){
                    $unRespondedRequests[] = $taxiRequest;
                }
            }
        }
        return $unRespondedRequests;
    }
}
