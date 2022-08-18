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
            $table->string('np_area_ref');
            $table->string('lang');
            $table->string('name');

            $table->foreign('np_area_ref')
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
