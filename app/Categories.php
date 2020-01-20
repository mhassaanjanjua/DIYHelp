<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public function sub_categories()
    {
        return $this->hasMany((SubCategories::class));
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
