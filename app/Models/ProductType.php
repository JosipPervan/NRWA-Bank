<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_type';

    protected $primaryKey = 'PRODUCT_TYPE_CD';
    public $incrementing = false;
    protected $keyType = 'string'; // Assuming PRODUCT_TYPE_CD is a string

    protected $fillable = [
        'NAME'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'PRODUCT_TYPE_CD', 'PRODUCT_TYPE_CD');
    }
}
