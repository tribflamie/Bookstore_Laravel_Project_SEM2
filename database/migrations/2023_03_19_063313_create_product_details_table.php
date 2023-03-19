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
        Schema::create('product_details', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('id')->references('id')->on('Products');
            
            $table->string("book", 255)->nullable(false);
            $table->string("author", 255)->nullable(false);
            $table->string("originalTitle",255)->nullable(true);
            $table->string("country",255)->nullable(false);
            $table->decimal("price", 4, 2)->nullable(false);
            $table->decimal("discount", 3, 2)->default(1);
            $table->string("photo", 255)->nullable(false);
            $table->string("genre",50)->nullable(false);
            $table->string("language", 30)->nullable(false);
            $table->date('publishedDate')->nullable(false);
            $table->string("mediaType",30)->nullable(false);
            $table->string("description",255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
