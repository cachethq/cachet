<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebHookResponsesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_hook_response', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hook_id')->unsigned();
            $table->tinyInteger('response_code')->nullable(false); // This should return something like 200, 301 etc.
            $table->string('response_type'); // application/json etc.
            $table->text('sent_headers');
            $table->longText('sent_body'); // What we sent the web hook
            $table->text('recv_headers');
            $table->longText('recv_body'); // Potentially a big response will be returned
            $table->float('time_taken')->default(0); // How long did the request take, in seconds.
            $table->timestamps();

            $table->index('hook_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('web_hook_response');
    }
}
