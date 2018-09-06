<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagIdShangpin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shangpins', function (Blueprint $table) {
            $table->string('views')->default(0)->comment('浏览量');
            $table->string('tag_id')->comment('标签ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shangpins', function (Blueprint $table) {
             $table->dropColumn('views');
             $table->dropColumn('tag_id');
        });
    }
}
