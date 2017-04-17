<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
        });
        DB::table('ranks')->insert(
            [
                ['title' => 'Guest'],
                ['title' => 'Trainee'],
                ['title' => 'Driver'],
                ['title' => 'Senior Driver'],
                ['title' => 'Team Leader'],
                ['title' => 'COO'],
                ['title' => 'CEO'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranks');
    }
}
