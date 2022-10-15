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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('branch_id')->references('id')->on('branches')->onDelete('restrict')->onUpdate('cascade');
            $table->string('assetType');
            $table->string('metric');
            $table->bigInteger('assetCost');
            $table->bigInteger('assetPrice');
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
        Schema::dropIfExists('assets');
    }
};
