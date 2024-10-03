<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $table = 'business'; // Table name 'business'
    protected $primaryKey = 'CUST_ID'; // PK is CUST_ID
    public $timestamps = false; // No timestamps

    protected $fillable = ['NAME', 'INCORP_DATE', 'STATE_ID', 'CUST_ID'];
}
