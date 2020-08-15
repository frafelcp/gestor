<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaArchivoResumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_resumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuario')->onDelete('cascade');
            $table->foreignId('archivo_id')->constrained('archivo')->onDelete('cascade');
            $table->string('referencia_pago', 100)->unique();
            $table->string('titular', 100);
            $table->decimal('total_pagar', 8, 2);
            $table->date('fecha_vencimiento');
            $table->string('estante', 10);
            $table->string('archivador', 10);
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
        Schema::dropIfExists('archivo_resumen');
    }
}
