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
    Schema::create('product1', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->unique();
        $table->integer('price');
        $table->string('image');
        $table->unsignedInteger('cate_id');
        $table->foreign('cate_id')->references('cate_id')->on('categories')->onDelete('cascade');
        $table->timestamps();
        
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product1');
    }
};
