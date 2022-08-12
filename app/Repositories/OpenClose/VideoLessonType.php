<?php

declare(strict_types=1);

namespace App\Repositories\OpenClose;

use App\Contracts\LessonTypeInterface;
use App\Http\Requests\LessonRequest;
use App\Models\VideoLesson;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

final class VideoLessonType implements LessonTypeInterface
{
    use ImageUploader;

    public function store(LessonRequest $attributes, $lesson): Model|Builder|VideoLesson
    {
        return VideoLesson::query()
            ->create([
                'lesson_id' => $lesson,
                'video_name' => self::uploadVideos($attributes)
            ]);
    }
}
