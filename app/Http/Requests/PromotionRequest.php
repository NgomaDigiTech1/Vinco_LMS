<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\AcademicYear;
use App\Models\Subsidiary;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class PromotionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'filiaire' => ['required', Rule::exists(Subsidiary::class, 'id')],
            'academic' => ['required', Rule::exists(AcademicYear::class, 'id')],
            'description' => ['nullable'],
        ];
    }
}
