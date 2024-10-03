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
        Schema::table('employee', function (Blueprint $table) {
            $table->foreign(['ASSIGNED_BRANCH_ID'], 'EMPLOYEE_BRANCH_FK')->references(['BRANCH_ID'])->on('branch')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['DEPT_ID'], 'EMPLOYEE_DEPARTMENT_FK')->references(['DEPT_ID'])->on('department')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['SUPERIOR_EMP_ID'], 'EMPLOYEE_EMPLOYEE_FK')->references(['EMP_ID'])->on('employee')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->dropForeign('EMPLOYEE_BRANCH_FK');
            $table->dropForeign('EMPLOYEE_DEPARTMENT_FK');
            $table->dropForeign('EMPLOYEE_EMPLOYEE_FK');
        });
    }
};
