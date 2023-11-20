<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("src");
            $table->unsignedBigInteger("likes_count")->default(0);
            $table->unsignedBigInteger("comments_count")->default(0);
            $table->foreignId("author")->references("id")->on("users");
            $table->timestamps();
            $table->timestamp("deleted_at")->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
