<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

 // Insert some user
    DB::table('users')->insert(
        array(
            'name'=>'user',
            'email' => 'user@user.com',
            'password' => '$2y$10$T/18hsuhpjRxfu3AoAyuY.wk6uGFJPlpqJ4q.JpqdhgkoqthUZ0ki'
        )
    );

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
