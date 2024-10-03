<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccTransaction extends Model
{
    protected $table = 'acc_transaction';

    protected $primaryKey = 'TXN_ID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'AMOUNT',
        'FUNDS_AVAIL_DATE',
        'TXN_DATE',
        'TXN_TYPE_CD',
        'ACCOUNT_ID',
        'EXECUTION_BRANCH_ID',
        'TELLER_EMP_ID'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'ACCOUNT_ID', 'ACCOUNT_ID');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'EXECUTION_BRANCH_ID', 'BRANCH_ID');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'TELLER_EMP_ID', 'EMP_ID');
    }
}
