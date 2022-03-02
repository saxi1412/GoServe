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
            $table->string('gender');
            $table->string('role_id');
            $table->string('image');
            $table->string('social_provider');
            $table->string('garage_name');
            $table->bigInteger('number')->unique();
            $table->string('address');
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->string('garage_address');
            $table->bigInteger('number_of_employees');
            $table->string('service_type');
            $table->bigInteger('gst_no')->unique();
            $table->string('vehicles');
            $table->bigInteger('salary');
            $table->bigInteger('aadhar_card_no')->unique();
            $table->bigInteger('pan_card_no')->unique();
            $table->string('past_job_experience');
            $table->string('current_job_description');
            $table->date('date_of_joining');
            $table->string('roles_and_responsibility');
            $table->bigInteger('emergency_contact_number')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
