<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('username', 200)->nullable(false);
            $table->string('password')->nullable(false);
            $table->rememberToken();
            $table->string('email')->nullable()->default(null);
            $table->boolean('active')->default(1);
            $table->tinyInteger('level')->default(2);
            $table->timestamps();

            $table->index('remember_token');
            $table->index('active');
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
