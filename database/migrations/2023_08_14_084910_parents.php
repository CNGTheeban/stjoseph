<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Parents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create table
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('userid');   
            $table->string('firstname');
            $table->string('lastname');
            $table->char('nic', 12);
            $table->string('addressline1');
            $table->string('addressline2');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->char('email', 100);
            $table->char('contactno', 10);
            $table->char('mobileno', 10);
            $table->integer('status');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        //Drop table
        Schema::drop('parents');
    }
}
