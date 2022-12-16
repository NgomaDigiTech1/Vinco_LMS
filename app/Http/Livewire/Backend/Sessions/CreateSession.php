<?php

namespace App\Http\Livewire\Backend\Sessions;

use App\Models\AcademicYear;
use App\Rules\AcademicRange;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Unique;
use Livewire\Component;
use Livewire\Redirector;

class CreateSession extends Component
{
    public string|null $start_date = null;
    public string|null $end_date = null;

    public function rules(): array
    {
        return [
            'start_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'before:end_date',
                new Unique(AcademicYear::class, 'start_date'),
                new AcademicRange()
            ],
            'end_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'after:start_date',
                new Unique(AcademicYear::class, 'end_date'),
                new AcademicRange()
            ],
        ];
    }

    public function storeSession(): RedirectResponse|Redirector
    {
        $session = $this->validate();

        AcademicYear::query()
            ->create(array_merge($session, [
                'institution_id' => \Auth::user()->institution->id
            ]));

        return redirect()->route(
            route: 'admins.academic.session.index'
        );
    }

    public function render(): Renderable
    {
        return View::make(
            view:  'livewire.backend.sessions.create-session'
        );
    }
}
