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
        Schema::create('user-group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->unsigned();
            $table->BigInteger('group_id')->unsigned();
            $table->boolean('is_admin')->default(false); // voir si l'utilisateur est admin dans le groupe
            $table->timestamps();
            $table->boolean('is_active')->default(true); // si l'utilisateur est dans le groupe
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user-group');
    }
}
