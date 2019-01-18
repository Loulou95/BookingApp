<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->AppointmentTimeDate)->format('d/F/Y/P');
    }
}
