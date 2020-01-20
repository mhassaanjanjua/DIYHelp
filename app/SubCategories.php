<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    //
    public function categories()
    {
        return $this->belongsTo((Categories::class));
    }

    public function get_services()
    {
        return $this->hasMany((GetService::class));
    }

    public function offer_services()
    {
        return $this->hasMany((OfferService::class));
    }
    
}
