<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('businesses')) {
      

        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('price',10,2);
            $table->string('city',60);
            $table->timestamps();
        });

      //DB::statement("ALTER TABLE business AUTO_INCREMENT = 1;");

     }
   }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
