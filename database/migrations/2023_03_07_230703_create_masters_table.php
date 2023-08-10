<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string('code', 100)->unique();
            $table->text('name')->unique();
            $table->string('master_code')->unique();
            $table->text('note')->nullable();
            $table->integer('status');
            $table->text('slug')->unique();
            $table->text('fecha-de-lanzamiento')->nullable();
            $table->text('fecha-de-extinción')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('masters');
    }
}
