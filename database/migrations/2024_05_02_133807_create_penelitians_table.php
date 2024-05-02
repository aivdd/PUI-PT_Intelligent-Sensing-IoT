<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penelitian', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('judul');
            $table->tinyInteger('tingkatan_tkt')->unsigned();
            $table->bigInteger('pendanaan')->unsigned()->nullable();
            $table->string('jangka_waktu', 32)->nullable();
            $table->string('file')->nullable();
            $table->text('feedback')->nullable();
            $table->smallInteger('status_penelitian_id')->unsigned();
            $table
                ->foreign('status_penelitian_id')
                ->references('id')
                ->on('status_penelitian')
                ->onDelete('restrict');
            $table->smallInteger('jenis_penelitian_id')->unsigned();
            $table
                ->foreign('jenis_penelitian_id')
                ->references('id')
                ->on('jenis_penelitian')
                ->onDelete('restrict');
            $table->smallInteger('mitra_id')->unsigned();
            $table
                ->foreign('mitra_id')
                ->references('id')
                ->on('mitra')
                ->onDelete('restrict');
            $table->boolean('arsip');
            $table->timestamps();
        });
        Schema::create('status_penelitian_key', function (Blueprint $table) {
            $table->tinyInteger('id')->unsigned()->autoIncrement()->primary();
            $table->string('name', 32);
            $table->timestamps();
        });
        Schema::create('status_penelitian', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->autoIncrement();
            $table->tinyInteger('status_penelitian_key_id')->unsigned();
            $table->string('name', 32);
            $table->timestamps();
            $table
                ->foreign('status_penelitian_key_id')
                ->references('id')
                ->on('status_penelitian_key')
                ->onDelete('restrict');
        });
        Schema::create('jenis_penelitian', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->autoIncrement()->primary();
            $table->string('name', 32);
            $table->timestamps();
        });
        Schema::create('mitra', function (Blueprint $table) {
            $table->smallInteger('id')->unsigned()->autoIncrement()->primary();
            $table->string('name', 64);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penelitian');
        Schema::dropIfExists('status_penelitian_key');
        Schema::dropIfExists('status_penelitian');
        Schema::dropIfExists('jenis_penelitian');
        Schema::dropIfExists('mitra');
    }
};