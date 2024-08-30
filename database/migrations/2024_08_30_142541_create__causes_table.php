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
        Schema::create('_causes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("raised");
            $table->string("goal");
            $table->string("pre");
            $table->string("imgUrl");
            $table->string("smallDisc");
            $table->text("desc");
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
        Schema::dropIfExists('_causes');
    }
};
