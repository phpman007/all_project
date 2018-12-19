<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserUpdateField extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->integer('user_group');
      $table->string('province', 150);
      $table->string('question_forget_password', 255);
      $table->string('answer_forget_password', 255);
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('user_group');
      $table->dropColumn('province');
      $table->dropColumn('question_forget_password');
      $table->dropColumn('answer_forget_password');
    });
  }
}
