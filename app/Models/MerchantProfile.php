<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantProfile extends Model
{
    protected $fillable = [
        'name',
        'merchant_id',
        'business_name',
        'business_type',
        'phone',
        'country',
        'city',
        'address',
        'website',
        'logo_path',
    ];

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}