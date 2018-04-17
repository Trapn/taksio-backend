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
        $taxiResponded = TaxiResponse::where('taxi_request_id', !null)->get();
        return $taxiResponded;
    }

    public function unResponded()
    {
        $taxiUnresponded = TaxiResponse::where('taxi_request_id', null)->get();
        return $taxiUnresponded;
    }
}
