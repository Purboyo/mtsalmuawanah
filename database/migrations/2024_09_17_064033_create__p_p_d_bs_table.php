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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('subtitle');
            $table->string('image');
            $table->string('link'); 
            $table->string('status'); 
            $table->timestamps();
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('_p_p_d_bs');
    }
};
