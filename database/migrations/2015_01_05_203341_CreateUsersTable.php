<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->string('email');
            $table->string('api_key');
            $table->boolean('active')->default(1);
            $table->tinyInteger('level')->default(2);
            $table->timestamps();

            $table->index('remember_token');
            $table->index('active');
            $table->unique('username');
            $table->unique('api_key');
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
