<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRyokansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ryokans', function (Blueprint $table) {
            $table->id();
            $table->string('ryokan_name');
            $table->string('ryokan_place');
            $table->string('ryokan_img')->nullable();
            $table->string('ryokan_discription');
            $table->string('ryokan_url');
            $table->string('ryokan_region');
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
        Schema::dropIfExists('ryokans');
    }
}
