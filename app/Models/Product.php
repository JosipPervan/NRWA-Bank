<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'PRODUCT_CD';
    public $incrementing = false; // Since it's a string, not auto-incrementing
    protected $keyType = 'string'; // PRODUCT_CD is a string

    protected $fillable = [
        'DATE_OFFERED',
        'DATE_RETIRED',
        'NAME',
        'PRODUCT_TYPE_CD'
    ];

    // Relationship with ProductType
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'PRODUCT_TYPE_CD', 'PRODUCT_TYPE_CD');
    }

    // Relationship with Account
    public function accounts()
    {
        return $this->hasMany(Account::class, 'PRODUCT_CD', 'PRODUCT_CD');
    }
}
