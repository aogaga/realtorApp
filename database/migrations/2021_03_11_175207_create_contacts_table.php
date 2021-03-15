<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string("fname");
            $table->string("lname");
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("streetAddress");
            $table->string("zip");
            $table->string("city");
            $table->string("state");
            $table->string("hearaboutUs");
            $table->string("budget");
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
        Schema::dropIfExists('contacts');
    }
}
