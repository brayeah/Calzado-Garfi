<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('estilo', 100);      
            $table->string('color', 100);
            $table->decimal('precio', 18, 2);
             $table->string('foto');
            $table->string('genero', 100);
            $table->integer('cantidad')->default('12');
            $table->string('numeracion', 100);
            $table->timestamps();
        });
        
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id'); 
             $table->timestamps();    
            $table->integer('user_id');
            $table->text('cart');
            $table->text('direccion');
            $table->string('name');
        });

   }
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
