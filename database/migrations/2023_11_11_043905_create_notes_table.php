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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('description',255)->nullable();
            $table->boolean('done')->default(false);
            // $table->integer('example')->default(0);
            // $table->unsignedInteger('example')->default(0);
            // $table->bigInteger('example')->default(0);
            // $table->unsignedBigInteger('example')->default(0);
            // $table->text('example')->nullable();
            // $table->float('example')->nullable();
            // $table->double('example')->nullable();
            // $table->enum('status', ['DRAFT','PUBLISH','DELETED']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
