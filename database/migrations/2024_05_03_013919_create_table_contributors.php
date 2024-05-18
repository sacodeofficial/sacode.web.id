<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('table_contributors', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('job_title');
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('picture')->nullable();

            $table->bigInteger('user_id');
            $table->timestamp('published_at')->nullable();
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_contributors');
    }
};
