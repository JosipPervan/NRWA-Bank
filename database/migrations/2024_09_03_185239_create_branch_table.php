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
        Schema::create('branch', function (Blueprint $table) {
            $table->integer('BRANCH_ID', true);
            $table->string('ADDRESS', 30)->nullable();
            $table->string('CITY', 20)->nullable();
            $table->string('NAME', 20);
            $table->string('STATE', 10)->nullable();
            $table->string('ZIP_CODE', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch');
    }
};
