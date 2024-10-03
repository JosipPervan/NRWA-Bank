<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'department'; // Assuming the table name is 'department'
    protected $primaryKey = 'DEPT_ID';
    public $timestamps = false; // If you don't have created_at and updated_at columns

    protected $fillable = ['NAME'];
}
