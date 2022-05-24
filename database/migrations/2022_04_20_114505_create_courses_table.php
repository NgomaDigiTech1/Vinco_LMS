<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->foreignIdFor(Category::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('subDescription');
            $table->text('description')->nullable();
            $table->string('duration');
            $table->string('images');
            $table->date('startDate');
            $table->date('endDate');
            $table->boolean('status')->default(StatusEnum::FALSE);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
