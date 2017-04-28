<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('title',200);
            $table->text('content');
            $table->integer('realestate_status')->unsigned();
            $table->foreign('realestate_status')
                ->references('id')
                ->on('realestate_status')
                ->onDelete('cascade');
            $table->double('area'); // m2
            $table->integer('district')->unsigned();
            $table->foreign('district')
                ->references('id')
                ->on('districts')
                ->onDelete('cascade');
            $table->integer('city')->unsigned();
            $table->foreign('city')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->json('images')->nullable(false)->change();
            $table->integer('type_of_realestate')->unsigned();
            $table->foreign('type_of_realestate')
                ->references('id')
                ->on('type_of_realestate')
                ->onDelete('cascade');
            $table->integer('type_of_customer')->unsigned();
            $table->foreign('type_of_customer')
                ->references('id')
                ->on('type_of_customer')
                ->onDelete('cascade');
            $table->integer('group_post')->unsigned();
            $table->foreign('group_post')
                ->references('id')
                ->on('group_post')
                ->onDelete('cascade');
            $table->double('price');
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
        Schema::dropIfExists('posts');
    }
}
