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
        Schema::create('account', function (Blueprint $table) {
            $table->integer('ACCOUNT_ID', true);
            $table->float('AVAIL_BALANCE', null, 0)->nullable();
            $table->date('CLOSE_DATE')->nullable();
            $table->date('LAST_ACTIVITY_DATE')->nullable();
            $table->date('OPEN_DATE');
            $table->float('PENDING_BALANCE', null, 0)->nullable();
            $table->string('STATUS', 10)->nullable();
            $table->integer('CUST_ID')->nullable()->index('account_customer_fk');
            $table->integer('OPEN_BRANCH_ID')->index('account_branch_fk');
            $table->integer('OPEN_EMP_ID')->index('account_employee_fk');
            $table->string('PRODUCT_CD', 10)->index('account_product_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
