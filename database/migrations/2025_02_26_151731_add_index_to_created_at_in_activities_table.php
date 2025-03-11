<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToCreatedAtInActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('activities', function (Blueprint $table) {
            $table->index('created_at'); // Add an index to the created_at column
        });
    }
    
    public function down() {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropIndex(['created_at']); // Remove the index
        });
    }
}
