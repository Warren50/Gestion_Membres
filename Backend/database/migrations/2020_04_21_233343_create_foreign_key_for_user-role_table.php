<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user-role', function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user-role', function(Blueprint $table){
            $table->dropForeign('user-role_user_id_foreign');
            $table->dropForeign('user-role_role_id_foreign');

        });
    }
}
