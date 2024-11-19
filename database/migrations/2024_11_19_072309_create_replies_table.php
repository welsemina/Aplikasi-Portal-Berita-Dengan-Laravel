<?php


use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;


return new class extends Migration

{

    public function up()

    {

        Schema::create('replies', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('comment_id');

            $table->foreign('comment_id')->references('id')->on('comments');

            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');

            $table->text('content');

            $table->timestamps();

        });

    }


    public function down()

    {

        Schema::dropIfExists('replies');

    }

};