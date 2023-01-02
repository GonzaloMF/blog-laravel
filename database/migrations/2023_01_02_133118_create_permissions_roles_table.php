<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Both foreign keys are using onDelete('cascade') because is a permission/rol is deleted, all relationship will be
     * also deleted
     * @return void
     */
    public function up()
    {
        Schema::create('permissions_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('permissions_id');
            $table->foreign('permissions_id', 'fk_permissroles_permissions')->references('id')->on('permissions')
                                                    ->onDelete('cascade')->onUpdate('restrict');
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id','fk_permissroles_roles')->references('id')->on('roles')
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
        Schema::dropIfExists('permissions_roles');
    }
};
