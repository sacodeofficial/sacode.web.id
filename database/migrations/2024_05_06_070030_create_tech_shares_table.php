<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tech_shares', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('date');
            $table->string('time');
            $table->string('poster');
            $table->string('speaker_id');
            $table->string('moderator_id');
            $table->string('wa_link');

            $table->bigInteger('user_id');

            $table->timestamp('published_at')->nullable(); // 'published_at'
            
            $table->softDeletes(); // 'deleted_at'
            $table->timestamps(); // 'created_at' && 'updated_at'

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tech_shares');
    }
};
