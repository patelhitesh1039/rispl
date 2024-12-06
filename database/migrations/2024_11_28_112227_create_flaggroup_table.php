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
        Schema::create('flaggroup', function (Blueprint $table) {
            $table->id();

            $table->string('flagGroupName', 45)->nullable();
            $table->unsignedBigInteger('parentFlagGroupId')->nullable();
            $table->integer('displayOrder')->nullable();
            $table->tinyInteger('isActive')->default(1);
            $table->tinyInteger('isDelete')->default(0);
            $table->longText('description')->nullable();

            $table->foreign('parentFlagGroupId')
                  ->references('id')->on('flaggroup')
                  ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flaggroup');
    }
};
