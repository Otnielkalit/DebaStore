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
<<<<<<< HEAD:database/migrations/2022_06_19_160253_add_address_table.php
        Schema::table('pesanans', function (Blueprint $table) {
            $table->text('address');
=======
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('imgjumbotron')->nullabel();
            $table->string('imgwelcom1')->nullabel();
            $table->string('imgwelcom2')->nullabel();
            $table->timestamps();
>>>>>>> b4dd1e9b329216482322e3eef336606557c59312:database/migrations/2022_06_19_104625_create_welcomes_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
