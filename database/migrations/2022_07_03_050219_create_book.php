<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->String('publisher');
            $table->date('published');
            $table->text('description');
            $table->text('synopsis');
            $table->integer('price');
            $table->integer('pages');
            $table->text('language');
            $table->string('photo')->nullable();
            $table->string('file');
            $table->string('slug');
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
        Schema::dropIfExists('book');
    }
}
