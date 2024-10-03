<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;

    protected $table = 'officer'; // Table name 'officer'
    protected $primaryKey = 'OFFICER_ID'; // PK is OFFICER_ID
    public $timestamps = false; // No timestamps

    protected $fillable = ['FIRST_NAME', 'LAST_NAME', 'START_DATE', 'END_DATE', 'TITLE', 'CUST_ID'];
}
