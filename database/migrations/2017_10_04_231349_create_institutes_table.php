<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            /*
             * CREATE TABLE `institute_table` (
  `i_uid` varchar(14) NOT NULL,
  `i_pi_name` varchar(50) NOT NULL,
  `i_pi_id` int(11) NOT NULL,
  `i_institute_type` varchar(10) NOT NULL,
  `i_first_name` varchar(50) NOT NULL,
  `i_last_name` varchar(50) NOT NULL,
  `i_contact` varchar(14) NOT NULL,
  `i_email` varchar(50) NOT NULL,
  `i_vemail` varchar(50) NOT NULL,
  `i_remail` varchar(50) NOT NULL,
  `i_password` varchar(100) NOT NULL,
  `i_date_created` date NOT NULL,
  `i_is_active` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
             */
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('partner_institute_name');
            $table->string('partner_institute_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('vicechancellor_email');
            $table->string('registrar_email');
            $table->tinyInteger('is_email_verified');
            $table->tinyInteger('is_active');
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
        Schema::dropIfExists('institutes');
    }
}
