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
        Schema::create('_comment', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->foreignId('blog_id')->constrained('_blog')->onDelete('cascade');

             $table->string("email");
             $table->string("imgUrl");

            $table->string("disc");
            $table->string("website");
            // $table->timestamps("date");
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
        Schema::dropIfExists('_comment');
    }
};
