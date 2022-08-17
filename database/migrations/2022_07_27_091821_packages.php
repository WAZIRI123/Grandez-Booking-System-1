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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('day1')->default('');
            $table->string('day2',2555)->default('');
            $table->string('day3',1118)->default('');
            $table->string('day4',1118)->default('');
            $table->string('day5',1118)->default('');
            $table->string('day6',2555)->default('');
            $table->string('day7',1118)->default('');
            $table->string('day8',1118)->default('');
            $table->string("slug", 100)->nullable();
            $table->string('total_days');
            $table->foreignId('package_type_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('packages');
    }
};
