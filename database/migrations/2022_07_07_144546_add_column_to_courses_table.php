<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('start_time');
            $table->string('end_time');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
};
