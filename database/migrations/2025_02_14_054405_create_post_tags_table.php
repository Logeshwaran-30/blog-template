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
       
        Schema::create('post_tags', function (Blueprint $table) {
            // Define the foreign key columns
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            // Set foreign keys and cascading delete
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            // Composite primary key for many-to-many relationship
            $table->primary(['post_id', 'tag_id']);
        
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tags');
    }
};
