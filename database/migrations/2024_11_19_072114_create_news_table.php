<?php


use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;


return new class extends Migration

{

    public function up()

    {

        Schema::create('news', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->text('content');

            $table->string('thumbnail');

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories');

            $table->timestamps();

        });

    }


    public function down()

    {

        Schema::dropIfExists('news');

    }

};