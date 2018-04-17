<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxiRequest extends Model
{
    protected $fillable = array('location', 'destination', 'luggage', 'wheel_user');

    const CREATED_AT = 'request_date';
    const UPDATED_AT = 'last_update';
    
}
