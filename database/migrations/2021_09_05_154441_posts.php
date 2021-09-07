<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('title');
            $table->longText('description');
            $table->string('image_path');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
        });
        
        // Schema::table('posts', function(Blueprint $table){
        //     $table->foreingId('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
