<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('folio')->nullable();
            $table->integer('type')->default(0);
            $table->integer('r_client_id');
            $table->string('description');
            $table->string('status')->default('pendiente');
            $table->double('retainer')->default(0);
            $table->double('amount')->default(0);
            $table->date('paid_at')->nullable();
            $table->date('delivered_at');
            $table->integer('r_team_id')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->longText('products')->nullable();
            $table->double('weight')->nullable();
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
        Schema::dropIfExists('r_quotations');
    }
}
