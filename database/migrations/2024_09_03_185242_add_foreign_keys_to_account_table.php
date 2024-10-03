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
        Schema::table('account', function (Blueprint $table) {
            $table->foreign(['OPEN_BRANCH_ID'], 'ACCOUNT_BRANCH_FK')->references(['BRANCH_ID'])->on('branch')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CUST_ID'], 'ACCOUNT_CUSTOMER_FK')->references(['CUST_ID'])->on('customer')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['OPEN_EMP_ID'], 'ACCOUNT_EMPLOYEE_FK')->references(['EMP_ID'])->on('employee')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['PRODUCT_CD'], 'ACCOUNT_PRODUCT_FK')->references(['PRODUCT_CD'])->on('product')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('account', function (Blueprint $table) {
            $table->dropForeign('ACCOUNT_BRANCH_FK');
            $table->dropForeign('ACCOUNT_CUSTOMER_FK');
            $table->dropForeign('ACCOUNT_EMPLOYEE_FK');
            $table->dropForeign('ACCOUNT_PRODUCT_FK');
        });
    }
};
