<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->decimal('total', 9, 2);
            $table->tinyInteger('estatus');

            $table->integer('fk_id_empleado')->unsigned();
            $table->integer('fk_id_cliente')->references('id')->on('users')->onDelete('cascade');;

            $table->foreign('fk_id_empleado')->references('id_empleado')->on('empleado')->onDelete('cascade');;
                
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
        Schema::drop('ventas');

    }
}
