<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxiResponse extends Model
{
    protected $table = 'taxi_responses';
    
    protected $fillable = array('expected_time', 'price', 'taxi_id', 'taxi_request_id');

}
