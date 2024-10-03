<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table = 'individual';

    protected $primaryKey = 'CUST_ID';
    public $incrementing = false; // Since CUST_ID is not an auto-incrementing integer
    protected $keyType = 'integer'; // Since CUST_ID is an integer

    protected $fillable = [
        'BIRTH_DATE',
        'FIRST_NAME',
        'LAST_NAME'
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CUST_ID', 'CUST_ID');
    }
}
