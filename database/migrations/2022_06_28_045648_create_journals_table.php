<?php

declare(strict_types=1);

use App\Models\Course;
use App\Models\Professor;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Student::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(Professor::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
