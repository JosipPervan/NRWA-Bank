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
        Schema::table('officer', function (Blueprint $table) {
            $table->foreign(['CUST_ID'], 'OFFICER_CUSTOMER_FK')->references(['CUST_ID'])->on('customer')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('officer', function (Blueprint $table) {
            $table->dropForeign('OFFICER_CUSTOMER_FK');
        });
    }
};
