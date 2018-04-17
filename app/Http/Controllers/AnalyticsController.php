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
        unset($respondedRequests);
        $respondedRequests = array();
        $taxiResponses = TaxiResponse::all()->where('taxi_request_id', !null);
        foreach ($taxiResponses as $taxiResponse){
            
            $respondedRequests[] = TaxiRequest::all()->where('id', $taxiResponse->taxi_id);
            echo "hey";
        }
        return $respondedRequests;      
    }

    public function unResponded()
    {
        unset($unRespondedRequests);
        $unRespondedRequests = array();
        $taxiRequests = TaxiRequest::all();
        foreach ($taxiRequests as $taxiRequest){  
            $taxiResponses = TaxiResponse::all();
            foreach ($taxiResponses as $taxiResponse){
                if($taxiResponse->taxi_id !== $taxiRequest->id){
                    $unRespondedRequests[] = $taxiRequest;
                    echo "hey";
                }
            }
        }
        return $unRespondedRequests;
    }
}
