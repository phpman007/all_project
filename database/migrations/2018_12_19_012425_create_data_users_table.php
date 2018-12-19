<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('field1')->nullable();
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->string('field4')->nullable();
            $table->date('date1')->nullable();
            $table->string('field5')->nullable();
            $table->string('field6')->nullable();
            $table->string('field7')->nullable();
            $table->string('field8')->nullable();
            $table->string('field9')->nullable();
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->date('date2')->nullable();
            $table->text('remark')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_users');
    }
}
