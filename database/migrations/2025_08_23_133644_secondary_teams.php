<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        Schema::create('secondary_teams', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('team_name');
            $table->string('alt_name')->nullable();
            $table->string('department');
            $table->unsignedInteger('gold')->default(0);
            $table->unsignedInteger('silver')->default(0);
            $table->unsignedInteger('bronze')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secondary_teams');
    }
};
