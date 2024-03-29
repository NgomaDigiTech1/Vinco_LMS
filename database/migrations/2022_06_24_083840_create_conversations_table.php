<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->text('message')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('group_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conversations');
    }
};
