<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * The foreign key menu is related itself with menu thats why is menu_menu
     * and if a menu 'father' is deleted, all his 'sons' will be deleted aswell
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id', 'fk_menu_menu')->references('id')->on('menu')->onDelete('cascade')
                                                    ->onUpdate('restrict');
            $table->string('name', 50);
            $table->string('url', 50);
            $table->unsignedInteger('order')->default(1);
            $table->string('icon', 50)->nullable();
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
        Schema::dropIfExists('menu');
    }
};
