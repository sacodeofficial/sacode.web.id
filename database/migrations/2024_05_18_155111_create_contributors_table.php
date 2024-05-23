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
        Schema::create('contributors', function (Blueprint $table) {

            $table->id();
            
            $table->string('name');
            $table->string('slug');
            $table->string('job_title');
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('picture')->nullable();

            $table->bigInteger('user_id');

            $table->timestamp('published_at')->nullable(); // 'published_at'
            
            $table->softDeletes(); // 'deleted_at'
            $table->timestamps(); // 'created_at' && 'updated_at' 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributors');
    }
};
