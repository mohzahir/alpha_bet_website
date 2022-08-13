<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('descr');
            $table->text('descr_ar');
            $table->text('goal');
            $table->text('goal_ar');
            $table->text('mission');
            $table->text('mission_ar');
            $table->text('vision');
            $table->text('vision_ar');
            $table->string('skill1_name');
            $table->string('skill1_name_ar');
            $table->integer('skill1_rate');
            $table->string('skill2_name');
            $table->string('skill2_name_ar');
            $table->integer('skill2_rate');
            $table->string('skill3_name');
            $table->string('skill3_name_ar');
            $table->integer('skill3_rate');
            $table->string('skill4_name');
            $table->string('skill4_name_ar');
            $table->integer('skill4_rate');
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
        Schema::dropIfExists('abouts');
    }
}
