<?php

namespace App\Rules;

use App\Models\AcademicYear;
use Illuminate\Contracts\Validation\Rule;

class AcademicRange implements Rule
{
    public function passes($attribute, $value): bool
    {
        return AcademicYear::query()
                ->where('start_date', '<=', $value)
                ->where('end_date', '>=', $value)
                ->count() === 0;
    }

    public function message(): string
    {
        return 'Il y a une année académique qui existe durant les dates séléctionnée.';
    }
}
