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
        Schema::create('profile', function (Blueprint $table) {
            $table->id(); //Auto Increment & PK (int)
            $table->string('name'); // Varchar 100
            $table->string('email'); // Varchar 100
            $table->bigInteger('nim')->unique(); // Big Integer
            $table->enum('jurusan', ['TI', 'SI', 'AK']);
            $table->text('alamat');
            $table->timestamps(); // 2 Field created_at & updated_at (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
