<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwowheelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twowheelers', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('modelname');
            $table->string('numberplate');
            $table->bigInteger('yearofmanufacturing');
            $table->string('colour');
            $table->string('fueltype');
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
        Schema::dropIfExists('twowheelers');
    }
}
