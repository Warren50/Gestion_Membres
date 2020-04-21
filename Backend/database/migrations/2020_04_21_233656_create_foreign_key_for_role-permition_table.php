<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForRolePermitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role-permition', function(Blueprint $table){
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->foreign('permition_id')->references('id')->on('permition')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role-permition', function(Blueprint $table){
            $table->dropForeign('role-permition_role_id_foreign');
            $table->dropForeign('role-permition_permition_id_foreign');

        });
    }
}
