<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $primaryKey = 'ACCOUNT_ID';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = [
        'AVAIL_BALANCE',
        'LAST_ACTIVITY_DATE',
        'OPEN_DATE',
        'PENDING_BALANCE',
        'STATUS',
        'CUST_ID',
        'OPEN_BRANCH_ID',
        'OPEN_EMP_ID',
        'PRODUCT_CD'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CUST_ID', 'CUST_ID');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'OPEN_BRANCH_ID', 'BRANCH_ID');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'OPEN_EMP_ID', 'EMP_ID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'PRODUCT_CD', 'PRODUCT_CD');
    }

    public function transactions()
    {
        return $this->hasMany(AccTransaction::class, 'ACCOUNT_ID', 'ACCOUNT_ID');
    }
}
