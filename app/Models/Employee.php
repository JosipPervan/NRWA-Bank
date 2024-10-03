<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    protected $primaryKey = 'Emp_Id';

    public $incrementing = false;

    protected $keyType = 'integer';

    protected $fillable = [
        'FIRST_NAME',
        'LAST_NAME',
        'START_DATE',
        'END_DATE',
        'TITLE',
        'ASSIGNED_BRANCH_ID',
        'DEPT_ID',
        'SUPERIOR_EMP_ID',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'ASSIGNED_BRANCH_ID', 'Branch_Id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'DEPT_ID', 'Dept_Id');
    }

    public function superiorEmployee()
    {
        return $this->belongsTo(Employee::class, 'SUPERIOR_EMP_ID', 'Emp_Id');
    }
}
