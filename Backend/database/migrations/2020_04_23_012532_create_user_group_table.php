<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('userId');
            $table->unsignedInteger('groupeId');
            $table->boolean('isActive');
            $table->boolean('isAdmin');
            $table->boolean('isCreator');
            $table->date('createdAt');
            $table->date('deletedAt');

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('groupId')->references('id')->on('group')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group');
    }
}
