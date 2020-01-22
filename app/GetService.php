<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetService extends Model
{
    //
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo((Categories::class));
    }

    public function sub_categories()
    {
        return $this->belongsTo((SubCategories::class));
    }

    public function user()
    {
        return $this->belongsTo((User::class));
    }

    public function applications()
    {
        return $this->hasOne((ServiceApplications::class));
    }
}
