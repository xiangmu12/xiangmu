<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageHuodong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huodongs', function (Blueprint $table) {
            //
            $table->string('image')->nullable()->comment('活动图片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huodongs', function (Blueprint $table) {
            //
            $table->dropColumn('image');
        });
    }
}
