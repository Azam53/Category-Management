<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_data', function(Blueprint $table)
      {
          $table->increments('id');

          $table->integer('user_id');
          $table->text('name');
          $table->text('email');
          $table->text('phone');
          $table->text('address');
          $table->text('company');
          $table->text('birthday');
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
        Schema::drop('contact_data');
    }
}
