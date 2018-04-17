<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    protected $fillable = array('license_plate', 'taxi_company_id');
    
    public function taxi() {
        return $this->hasOne('taxi_company');
    }
}
