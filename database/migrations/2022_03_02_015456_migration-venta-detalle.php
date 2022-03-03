<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationVentaDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta-detalle', function (Blueprint $table) {
            $table->increments('id_venta_detalle');
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
            $table->decimal('utilidad', 8, 2);

            $table->integer('fk_id_venta')->unsigned();
            $table->foreign('fk_id_venta')->references('id_venta')->on('ventas')->onDelete('cascade');;

            $table->string('fk_id_producto');

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
        Schema::drop('venta-detalle');

    }
}
