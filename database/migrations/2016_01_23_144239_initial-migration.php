<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('to_expect_id')->nullable();
            $table->integer('not_to_expect_id')->nullable();
            $table->integer('market_id')->nullable();
            $table->integer('neraby_id')->nullable();
            $table->integer('cover_img_id')->nullable();
            $table->integer('neighbourhood_id');
            $table->integer('status');
            $table->timestamps();
        });
        Schema::create('to_expect', function(Blueprint $table){
            $table->increments('id');
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->timestamps();
        });
        Schema::create('not_to_expect', function(Blueprint $table){
            $table->increments('id');
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->timestamps();
        });
        Schema::create('markets', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->timestamps();
        });
        Schema::create('nerabys', function(Blueprint $table){
            $table->increments('id');
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->timestamps();
        });
        Schema::create('galleries', function(Blueprint $table){
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('raw_data')->nullable();
            $table->timestamps();
        });
        Schema::create('images', function(Blueprint $table){
            $table->increments('id');
            $table->string('full')->nullable();
            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
            $table->text('raw_data')->nullable();
            $table->timestamps();
        });
        Schema::create('gallery_image', function(Blueprint $table){
            $table->integer('gallery_id');
            $table->integer('image_id');
            $table->integer('size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
        Schema::drop('to_expect');
        Schema::drop('not_to_expect');
        Schema::drop('markets');
        Schema::drop('nerabys');
        Schema::drop('galleries');
        Schema::drop('images');
        Schema::drop('gallery_image');
    }
}
