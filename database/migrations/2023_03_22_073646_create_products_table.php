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
            $table->bigIncrements('id');
            $table->foreignId('categories_id')->references('id')->on('categories');
            $table->string("name", 150)->nullable(false);
            $table->string("author", 150)->nullable(false);
            $table->string("country", 45)->nullable(false);
            $table->integer("published")->nullable(false);
            $table->integer("sales")->nullable(false);
            $table->decimal("price", 4, 2)->nullable(false);
            $table->decimal("discount", 3, 2)->nullable(false)->default(1);
            $table->string("photo", 150)->nullable(false);
            $table->text("description")->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
