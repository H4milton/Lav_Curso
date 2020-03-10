<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id');
            $table->unsignedInteger('permiso_id');
            $table->timestamps();

            $table->foreign('rol_id','fk_permisoRol_rol')->references('id')->on('rol');
            $table->foreign('permiso_id','fk_permisoRol_permiso')->references('id')->on('permiso');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_rol');
    }
}
