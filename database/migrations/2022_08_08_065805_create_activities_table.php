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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->string("slug", 100)->nullable();
            $table->text('explanation');
            $table->string('price0')->nullable();
            $table->string('price1')->nullable();
            $table->string('price2')->nullable();
            $table->string('price3')->nullable();
            $table->string('include0')->nullable();
            $table->string('include1')->nullable();
            $table->string('include2')->nullable();
            $table->string('include3')->nullable();
            $table->string('include4')->nullable();
            $table->string('notInclude0')->nullable();
            $table->string('notInclude1')->nullable();
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
        Schema::dropIfExists('activities');
    }
};
