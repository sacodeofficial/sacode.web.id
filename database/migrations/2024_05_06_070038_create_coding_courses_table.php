<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('coding_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('thumbnail');
            $table->string('wa_link');
            $table->boolean('is_on_site')->default(true);  //true (1) = On Site, false (0) = Online
            $table->boolean('is_open')->default(true);  //true (1) = Register Now, false (0) = Closed
            $table->bigInteger('user_id');
            $table->timestamp('published_at')->nullable(); // 'published_at'
            $table->softDeletes('deleted_at'); // 'deleted_at'
            $table->timestamp('created_at')->nullable(); // 'created_at' and 'updated_at'
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coding_courses');
    }
};
