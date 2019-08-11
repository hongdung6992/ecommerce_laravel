<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('phone', 11)->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->unsignedInteger('role_id')->nullable();
      $table->foreign('role_id')->references('id')->on('roles')->onDelete('SET NULL');
      $table->boolean('status')->default(true)->comment('1:acvive, 0: inactive');
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
