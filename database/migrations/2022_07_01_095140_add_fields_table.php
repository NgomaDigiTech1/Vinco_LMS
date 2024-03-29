<?php

declare(strict_types=1);

use App\Models\Institution;
use App\Models\Promotion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('campuses', function (Blueprint $table) {
            $table->foreignIdFor(Institution::class)
                ->constrained()
                ->cascadeOnDelete();
        });

        Schema::table('journals', function (Blueprint $table) {
            $table->foreignIdFor(Institution::class)
                ->constrained()
                ->cascadeOnDelete();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreignIdFor(Institution::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Promotion::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
        });

        Schema::table('fees', function (Blueprint $table) {
            $table->foreignIdFor(Institution::class)
                ->constrained()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        //
    }
};
