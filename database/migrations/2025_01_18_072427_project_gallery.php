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
        Schema::create("projectGallery",function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("projectId")->nullable(false);
            $table->string("image")->nullable(false);
            $table->string("imageAvif")->nullable(false);
            $table->dateTime("created_at")->nullable(false);
            $table->dateTime("updated_at")->nullable(false);

            $table->foreign("projectId")->on("project")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("projectGallery");
    }
};
