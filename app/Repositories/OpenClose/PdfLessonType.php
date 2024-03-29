<?php

declare(strict_types=1);

namespace App\Repositories\OpenClose;

use App\Contracts\LessonTypeInterface;
use App\Http\Requests\LessonRequest;
use App\Http\Requests\LessonUpdateRequest;
use App\Models\LessonFiles;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

final class PdfLessonType implements LessonTypeInterface
{
    use ImageUploader;

    public function store(LessonRequest $attributes, $lesson): Model|Builder|LessonFiles
    {
        return LessonFiles::query()
            ->create([
                'lesson_id' => $lesson,
                'files' => self::uploadPDF($attributes),
            ]);
    }

    public function update(LessonUpdateRequest $request, $lesson): Model|Builder|LessonFiles
    {
        $pdf = LessonFiles::query()
            ->where('lesson_id', '=', $lesson)
            ->firstOrFail();
        $this->removePDFFiles($pdf);

        $pdf->update([
            'lesson_id' => $lesson,
            'files' => self::uploadPDF($request),
        ]);

        return $pdf;
    }
}
