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
        Schema::create('internships', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nombre");
            $table->string("descripcion",1000);
            $table->string("resposabilidades");
            $table->string("requisitos");
            $table->date("fecha");
            $table->date("fecha_limite");
            $table->unsignedBigInteger('degree_id');
            $table->unsignedBigInteger('company_id');
            $table->text("foto");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
