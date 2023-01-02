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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id', 'fk_comments_users')->references('id')->on('users')->onDelete('cascade')
                                                        ->onUpdate('restrict');
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id', 'fk_comments_posts')->references('id')->on('posts')->onDelete('cascade')
                                                        ->onUpdate('restrict');
            $table->unsignedBigInteger('comments_id')->nullable();
            $table->foreign('comments_id', 'fk_comments_comments')->references('id')->on('comments')->onDelete('cascade')
                                                        ->onUpdate('restrict');
            $table->text('body');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('comments');
    }
};
