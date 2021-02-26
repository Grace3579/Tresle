<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
        DB::statement('
        CREATE TRIGGER `tr_Business` BEFORE INSERT ON `businesses` FOR EACH ROW
            BEGIN
                	DECLARE str_len INT DEFAULT 0;
     	DECLARE max_len INT DEFAULT 50;
     	DECLARE min_len INT DEFAULT 10;

     	SET str_len = LENGTH(businesses.name);

     	IF (str_len > max_len OR str_len < min_len )
     	THEN
           		//SIGNAL SQLSTATE '45000' set message_text='Error: Business Name should be between 10 and 50 characters';
     	END IF;

	IF (businesses.price > 10000000 OR businesses.price < 10000)
	THEN
		//SIGNAL SQLSTATE '45000' set message_text='Error: Business Price should be between 10 thousand to 10 million';
	END IF;

            END
        ');*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // DB::unprepared('DROP TRIGGER `tr_Business`');
    }
}
