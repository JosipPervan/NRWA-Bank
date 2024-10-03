<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; // Table name 'customer'
    protected $primaryKey = 'CUST_ID';
    public $timestamps = false; // No timestamps

    protected $fillable = ['ADDRESS', 'CITY', 'CUST_TYPE_CD', 'POSTAL_CODE', 'STATE'];
}
