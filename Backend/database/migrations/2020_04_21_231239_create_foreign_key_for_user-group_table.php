<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user-group', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('group')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user-group', function(Blueprint $table){
            $table->dropForeign('user-group_user_id_foreign');
            $table->dropForeign('user-group_group_id_foreign');

        });
    }
}
