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
        Schema::create('officer', function (Blueprint $table) {
            $table->integer('OFFICER_ID', true);
            $table->date('END_DATE')->nullable();
            $table->string('FIRST_NAME', 30);
            $table->string('LAST_NAME', 30);
            $table->date('START_DATE');
            $table->string('TITLE', 20)->nullable();
            $table->integer('CUST_ID')->nullable()->index('officer_customer_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officer');
    }
};
