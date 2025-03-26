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
        Schema::create("productGallery",function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("productId")->nullable(false);
            $table->string("image")->nullable(true);
            $table->string("imageAvif")->nullable(true);
            $table->string("name")->nullable(true);
            $table->string("nameEnglish")->nullable(true);
            $table->dateTime("created_at")->nullable(false);
            $table->dateTime("updated_at")->nullable(false);

            $table->foreign("productId")->on("product")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("productGallery");
    }
};
