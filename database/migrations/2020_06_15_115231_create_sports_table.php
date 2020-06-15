<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 50);
            $table->text("description");
            $table->string("start_time", 100);
            $table->string("arena", 100);
            $table->foreignId("category_id")->unsigned();

            // setup foreign id with sports category model
            $table->foreign("category_id")->references("id")
                ->on("categories")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports');
    }
}
