<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_loan', function (Blueprint $table) {
            $table->id();
            $table->integer('days');
            $table->integer('price');
            $table->foreignId('id_loan')->constrained('loan')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('id_book')->constrained('book')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('details_loan');
    }
}
