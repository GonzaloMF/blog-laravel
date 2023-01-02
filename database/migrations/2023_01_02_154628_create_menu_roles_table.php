<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Both foreign keys are using onDelete('cascade') because is a rol/menu is deleted, all relationship will be
     * also deleted
     * @return void
     */
    public function up()
    {
        Schema::create('menu_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id', 'fk_menuroles_menu')->references('id')->on('menu')
                                                    ->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id','fk_menuroles_roles')->references('id')->on('roles')
                                                    ->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_roles');
    }
};
