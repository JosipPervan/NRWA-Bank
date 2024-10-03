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
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('EMP_ID', true);
            $table->date('END_DATE')->nullable();
            $table->string('FIRST_NAME', 20);
            $table->string('LAST_NAME', 20);
            $table->date('START_DATE');
            $table->string('TITLE', 20)->nullable();
            $table->integer('ASSIGNED_BRANCH_ID')->nullable()->index('employee_branch_fk');
            $table->integer('DEPT_ID')->nullable()->index('employee_department_fk');
            $table->integer('SUPERIOR_EMP_ID')->nullable()->index('employee_employee_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
