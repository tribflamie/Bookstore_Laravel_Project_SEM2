<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * using php artisan migrate:fresh --path=/database/migrations/2014_10_12_000000_create_database.php
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 150)->nullable(false);
            $table->string('role', 45)->default('user');
            $table->string('email', 150)->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 150)->nullable(false);
            $table->rememberToken()->nullable();
            $table->string('gender', 45)->nullable();
            $table->date('yob')->nullable();
            $table->string('phone', 45)->nullable();
            $table->string('location', 150)->nullable();
            $table->text('bio')->nullable();
            $table->string('photo', 150)->nullable()->default('avatar-1.jpg');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categories', 45)->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('photo', 150)->nullable(false);
        });
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('categories_id')->references('id')->on('categories');
            $table->string("name", 150)->nullable(false);
            $table->string("author", 150)->nullable(false);
            $table->string("country", 45)->nullable(false);
            $table->integer("published")->nullable(false);
            $table->decimal("price", 4, 2)->nullable(false);
            $table->decimal("discount", 3, 2)->nullable(false)->default(1);
            $table->string("photo", 150)->nullable(false);
            $table->text("description")->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->references('id')->on('users');
            $table->foreignId('products_id')->references('id')->on('products');
            $table->integer('rating')->nullable(false);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->references('id')->on('users');
            $table->string('status')->default('Pending');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('orders_id')->references('id')->on('orders');
            $table->foreignId('products_id')->references('id')->on('products');
            $table->integer('unit_quantity')->nullable(false);
            $table->decimal('unit_sold_price', 6, 2)->nullable(false);
        });
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orders_id')->nullable(true);

            $table->string('code', 150)->nullable(false);
            $table->unique('code');
            $table->decimal('value', 3, 2)->nullable(false);
            $table->text('description')->nullable(false);
            $table->date('exp_date')->nullable(false);
            $table->string('status', 45)->default('available');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('feedbacks_id')->references('id')->on('feedbacks');
            $table->foreignId('users_id')->references('id')->on('users');
            $table->text('description')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
        Schema::dropIfExists('feedbacks');
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('personal_access_tokens');
        Schema::dropIfExists('failed_jobs');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
