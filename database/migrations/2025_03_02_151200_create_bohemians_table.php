<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBohemiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('bohemians', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('photocover');
        $table->string('photo1');
        $table->string('photo2')->nullable();
        $table->string('photo3')->nullable();
        $table->string('photo4')->nullable();
        $table->string('photo5')->nullable();
        $table->string('slug')->unique()->after('title');
        $table->string('status')->default('hide');
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
        Schema::dropIfExists('bohemians');
    }
}
