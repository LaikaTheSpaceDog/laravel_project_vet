<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('type', 50);
            $table->date('dob');
            $table->float('weight_kg', 5, 2);
            $table->float('height_m', 3, 2);
            $table->integer('biteyness');
            $table->timestamps();


            $table->foreignId("owner_id")->unsigned();

            $table->foreign("owner_id")->references("id")->on("owners")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
