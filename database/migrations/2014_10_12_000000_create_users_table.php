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
            /*
             * CREATE TABLE `user_table` (
  `u_uid` varchar(14) NOT NULL,
  `u_organization_name` varchar(50) NOT NULL,
  `u_first_name` varchar(20) NOT NULL,
  `u_last_name` varchar(20) NOT NULL,
  `u_contact` varchar(14) NOT NULL,
  `u_country` text NOT NULL,
  `u_state` text NOT NULL,
  `u_city` text NOT NULL,
  `u_is_company` tinyint(2) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_bio` text NOT NULL,
  `u_url_of_photo_image` text NOT NULL,
  `u_url_of_nic_image` text NOT NULL,
  `u_date_registered` date NOT NULL,
  `u_hash` text NOT NULL,
  `u_is_email_verified` tinyint(2) NOT NULL,
  `u_is_active` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
             */
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('organization_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('state');
            $table->string('city');
            $table->text('bio');
            $table->string('photo');
            $table->string('identity_document');
            $table->tinyInteger('is_company');
            $table->tinyInteger('is_email_verified')->default('0');
            $table->tinyInteger('is_active')->default('1');
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
