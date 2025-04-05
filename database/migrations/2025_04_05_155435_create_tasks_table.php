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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->enum("stage",[1,2,3,4])->default(1);
            $table->enum("priority",[1,2,3,4])->default(1);
            $table->unsignedBigInteger("board_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("tag_id");
            $table->timestamps();

            $table->foreign("board_id")->references("id")->on("boards")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
