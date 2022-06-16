<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\Lesson;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->foreignIdFor(Lesson::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name', '30');
            $table->string('files')->nullable();
            $table->string('path')->nullable();
            $table->boolean('status')->default(StatusEnum::FALSE);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resources');
    }
};
