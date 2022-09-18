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
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('show_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('photo')->nullable();;
            $table->string('password');

            $table->rememberToken();

            $table->ipAddress('last_ip')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_visit_date')->nullable();
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
