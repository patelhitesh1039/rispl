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
        Schema::create('systemflag', function (Blueprint $table) {
            $table->id();
            $table->string('valueType', 45)->nullable();
            $table->string('name', 45)->nullable();
            $table->string('value', 200)->nullable();
            $table->string('isActive', 45)->default('1');
            $table->string('isDelete', 45)->default('0');
            $table->string('displayName', 45)->nullable();
            $table->unsignedBigInteger('flagGroupId');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systemflag');
    }
};
