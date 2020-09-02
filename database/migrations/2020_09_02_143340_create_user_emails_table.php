<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_emails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('email_id')->unsigned();
            $table->enum('frequency',['Daily','TwoPW','ThreePW','Weekly','Monthly'])->default('TwoPW')->nullable();
            $table->enum('delivered',['YES','NO'])->default('NO');
            $table->string('date_string')->nullable();
            $table->date('last_day')->nullable();
            $table->time('send_time')->nullable();
            $table->dateTime('send_timer');
            $table->foreign('user_id')->references('id')->on('form_responses')->onDelete('cascade');
            $table->foreign('email_id')->references('id')->on('emails')->onDelete('cascade');
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
        Schema::dropIfExists('user_emails');
    }
}
