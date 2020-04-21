<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invitation', function(Blueprint $table){
            $table->foreign('group')->references('id')->on('group')->onDelete('cascade');
            $table->foreign('admin')->references('id')->on('user')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitation', function(Blueprint $table){
            $table->dropForeign('invitation_group_foreign');
            $table->dropForeign('invitation_admin_foreign');

        });
    }
}
