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
        Schema::table('acc_transaction', function (Blueprint $table) {
            $table->foreign(['ACCOUNT_ID'], 'ACC_TRANSACTION_ACCOUNT_FK')->references(['ACCOUNT_ID'])->on('account')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['EXECUTION_BRANCH_ID'], 'ACC_TRANSACTION_BRANCH_FK')->references(['BRANCH_ID'])->on('branch')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['TELLER_EMP_ID'], 'ACC_TRANSACTION_EMPLOYEE_FK')->references(['EMP_ID'])->on('employee')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('acc_transaction', function (Blueprint $table) {
            $table->dropForeign('ACC_TRANSACTION_ACCOUNT_FK');
            $table->dropForeign('ACC_TRANSACTION_BRANCH_FK');
            $table->dropForeign('ACC_TRANSACTION_EMPLOYEE_FK');
        });
    }
};
