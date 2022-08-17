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
        Schema::create('np_area_translates', function (Blueprint $table) {
            $table->bigInteger('np_area_id')->unsigned();
            $table->string('lang');
            $table->string('name');

            $table->foreign('np_area_id')
                ->references('id')->on('np_areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('np_area_translates');
    }
};
