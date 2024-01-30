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
        Schema::table('fellowships', function (Blueprint $table) {
            $table->float("IPK")->change(); // Change Datatype length
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fellowships', function (Blueprint $table) {
            $table->integer("IPK")->change(); // Change Datatype length
        });
    }
};