<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceApplications extends Model
{
    //
    public function get_services()
    {
        return $this->belongsTo((GetService::class));
    }

    public function offer_services()
    {
        return $this->belongsTo((OfferService::class));
    }
    
    public function order()
    {
        return $this->hasOne((Orders::class));
    }

    public function user()
    {
        return $this->belongsTo((User::class));
    }
}
