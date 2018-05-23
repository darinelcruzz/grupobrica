<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRClientsTable extends Migration
{
    public function up()
    {
        Schema::create('r_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('rfc')->nullable();
            $table->integer('credit')->default(0);
            $table->integer('discount')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('r_clients');
    }
}
