<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branch'; // Table name 'branch'
    protected $primaryKey = 'BRANCH_ID';
    public $timestamps = false; // No timestamps

    protected $fillable = ['ADDRESS', 'CITY', 'NAME', 'STATE', 'ZIP_CODE'];
}
