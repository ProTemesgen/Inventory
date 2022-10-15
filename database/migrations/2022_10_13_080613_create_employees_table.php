<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->references('id')->on('branches')->onDelete('restrict')->onUpdate('cascade');
            $table->string('employeeFname');
            $table->string('employeeLname');
            $table->text('employeeAddress');
            $table->bigInteger('employeePhone');
            $table->bigInteger('employeeSallary');
            $table->string('employeeRoll');
            $table->text('employeeScanedId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
