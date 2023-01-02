<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Contrary to others migrations integrated; the foreign key between categories and post (in post)
     * are on cascade because if we delete a post we want to delete all the relationship
     * BUT between categories and post (in categories) if we remove a category, we want to keep a relation
     * thats why we restrict that.
     * @return void
     */
    public function up()
    {
        Schema::create('posts_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id', 'fk_postcategories_posts')->references('id')->on('posts')
                                                    ->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id','fk_postcategories_categories')->references('id')->on('categories')
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
        Schema::dropIfExists('posts_categories');
    }
};
