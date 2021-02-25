<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutP2STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_p2_s', function (Blueprint $table) {
            $table->id();
            $table->string("icon", 50);
            $table->string("color", 50);
            $table->string("span", 50);
            $table->string("strong", 50);
            $table->string("p", 500);
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
        Schema::dropIfExists('about_p2_s');
    }
}
