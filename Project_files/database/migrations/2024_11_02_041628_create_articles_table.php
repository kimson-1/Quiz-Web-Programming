<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->enum('Category',['DS','NW']); //DS=Data Science, NW= Network Security;
            $table->string('Title');
            $table->date('releaseDate');
            $table->unsignedBigInteger('writer_id');
            $table->text('Description');
            $table->text('Content');
            $table->string('image');
            $table->timestamps();


            $table->foreign('writer_id')->references('id')->on('writers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
