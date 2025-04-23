<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCiudadIdToHotelesTable extends Migration
{
    public function up()
    {
        Schema::table('hoteles', function (Blueprint $table) {
            $table->foreignId('ciudad_id')->constrained('ciudades')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('hoteles', function (Blueprint $table) {
            $table->dropForeign(['ciudad_id']);
            $table->dropColumn('ciudad_id');
        });
    }
}
