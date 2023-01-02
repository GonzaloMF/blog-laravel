<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Contrary to others migrations integrated; the foreign key between posts and tags (in post)
     * are on cascade because if we delete a post we want to delete all the relationship
     * BUT between posts and tags (in tags) if we remove a tag, don not remove it if has a relation with a post,
     * thats why is restrinct.
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id', 'fk_posttags_posts')->references('id')->on('posts')
                                                    ->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id','fk_posttags_tags')->references('id')->on('tags')
                                                     ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tags');
    }
};
