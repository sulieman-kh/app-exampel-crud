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
    

    // up:create the table_db
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin');
            $table->integer('price');
            $table->timestamps(); //2 columns: first column: created_at | second column: updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    
    // down = delete the table_db (computers)
    public function down()
    {
        Schema::dropIfExists('computers');
    }
};
