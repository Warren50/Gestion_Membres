<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('senderId');
            $table->unsignedInteger('receiverId');
            $table->boolean('isActive');
            $table->enum('status',['waitting','accepted','denied']);
            $table->date('createdAt');
            $table->date('answeredAt');

            $table->foreign('senderId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiverId')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitation');
    }
}
