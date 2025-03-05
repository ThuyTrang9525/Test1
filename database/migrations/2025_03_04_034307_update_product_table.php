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
    Schema::table('product1', function (Blueprint $table) {
        $table->string('website')->nullable();
        $table->string('email')->nullable();
        $table->string('company_name')->nullable();
        $table->string('address')->nullable();
    });
}

public function down()
{
    Schema::table('product1', function (Blueprint $table) {
        $table->dropColumn(['website', 'email', 'company_name', 'address']);
    });
}
};
