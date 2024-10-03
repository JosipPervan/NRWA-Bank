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
        Schema::create('product', function (Blueprint $table) {
            $table->string('PRODUCT_CD', 10)->primary();
            $table->date('DATE_OFFERED')->nullable();
            $table->date('DATE_RETIRED')->nullable();
            $table->string('NAME', 50);
            $table->string('PRODUCT_TYPE_CD')->nullable()->index('product_product_type_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
