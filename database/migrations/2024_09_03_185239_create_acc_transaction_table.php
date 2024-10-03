<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('acc_transaction', function (Blueprint $table) {
            $table->bigInteger('TXN_ID', true);
            $table->float('AMOUNT', null, 0);
            $table->dateTime('FUNDS_AVAIL_DATE');
            $table->dateTime('TXN_DATE');
            $table->string('TXN_TYPE_CD', 10)->nullable();
            $table->integer('ACCOUNT_ID')->nullable()->index('acc_transaction_account_fk');
            $table->integer('EXECUTION_BRANCH_ID')->nullable()->index('acc_transaction_branch_fk');
            $table->integer('TELLER_EMP_ID')->nullable()->index('acc_transaction_employee_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acc_transaction');
    }
};
