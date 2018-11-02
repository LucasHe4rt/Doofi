<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('address');
            $table->string('number');
            $table->string('phone');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('cellphone2')->nullable();
            $table->string('cellphone3')->nullable();
            $table->string('description');
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
        Schema::dropIfExists('estabelecimentos');
    }
}
