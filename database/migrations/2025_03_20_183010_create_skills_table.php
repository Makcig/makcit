<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // Тип (например, "Язык", "Технология", "Навык")
            $table->string('name'); // Название (например, "PHP", "Laravel", "Английский")
            $table->unsignedTinyInteger('level')->nullable(); // Уровень от 1 до 5
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
