<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Title
            $table->string('author'); // Author
            $table->integer('published_year'); // Published Year
            $table->string('genre'); // Genre
            $table->text('description'); // Description
            $table->timestamps(); // Created at and Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
