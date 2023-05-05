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
        Schema::create('comentario', function (Blueprint $table) {
            $table->increments('id_comentario');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_post');
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id_user')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_post')
            ->references('id_post')->on('posteos')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_comentario');
    }
};
