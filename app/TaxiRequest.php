<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxiRequest extends Model
{
    protected $fillable = array('location', 'destination', 'luggage', 'wheelchair_user');
    
}
