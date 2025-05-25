<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->date('tanggal')->after('judul'); // atau letakkan di tempat sesuai
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn('tanggal');
        });
    }

};
