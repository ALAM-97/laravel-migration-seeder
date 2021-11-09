<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('code', 15)->unique();
            $table->string('location', 40);
            $table->integer('min_travelers');
            $table->integer('max_travelers');
            $table->float('price', 7, 2);
            $table->date('departure_date');
            $table->string('departure_city', 40);
            $table->integer('travel_duration');
            $table->text('travel_description');
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
        Schema::dropIfExists('travels');
    }
}
