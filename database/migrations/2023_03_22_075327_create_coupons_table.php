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
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('orders_id')->references('id')->on('orders');

            $table->string('code', 150)->nullable(false);
            $table->decimal('value', 3, 2)->nullable(false);
            $table->text('description')->nullable(false);
            $table->date('exp-date')->nullable(false);
            $table->string('status', 45)->default('available');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
