<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('roleId');
            $table->unsignedInteger('userId');
            $table->boolean('isActive');
            $table->date('createdAt');
            $table->date('deletedAt');

            $table->foreign('roleId')->references('id')->on('role')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
}
