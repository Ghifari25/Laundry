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
    Schema::table('users', function (Blueprint $table) {
        $table->integer('id_outlet')->default(0)->change();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->integer('id_outlet')->default(null)->change();
    });
}

};
