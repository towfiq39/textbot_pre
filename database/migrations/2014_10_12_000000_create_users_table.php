<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('user_name')->nullable();
            $table->string('email')->unique();
            $table->string('dob')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('certificate_name')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('batch')->nullable();
            $table->string('department')->nullable();
            $table->string('institution')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('status')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
