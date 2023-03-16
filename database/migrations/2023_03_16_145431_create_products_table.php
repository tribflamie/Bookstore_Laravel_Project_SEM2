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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string("book", 255)->nullable(false);
            $table->string("author", 255)->nullable(false);
            $table->string("language", 30)->nullable(false);
            $table->integer("published")->nullable(false);
            $table->integer("sales")->nullable(false);
            $table->string("genre", 255)->nullable();
            $table->decimal("price", 4, 2)->nullable(false);
            $table->decimal("discount", 3, 2)->default(1);
            $table->string("photo", 255)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
