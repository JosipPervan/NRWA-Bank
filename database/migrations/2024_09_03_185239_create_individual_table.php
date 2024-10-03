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
        Schema::create('individual', function (Blueprint $table) {
            $table->date('BIRTH_DATE')->nullable();
            $table->string('FIRST_NAME', 30);
            $table->string('LAST_NAME', 30);
            $table->integer('CUST_ID')->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual');
    }
};
