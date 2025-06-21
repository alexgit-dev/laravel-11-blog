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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_desc')->nullable();
            $table->text('content');

            // если конвенция по именованию полей не соблюдена, то можно прописать связи вот  таким образом
            // $table->unsignedInteger('category_id');
            // $table->bigInteger('category_id')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories');

            $table->foreignId('category_id')->constrained(); // если соблюдена конвенция по именованию полей

            $table->bigInteger('views')->unsigned()->default(0);
            $table->string('thumb')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
