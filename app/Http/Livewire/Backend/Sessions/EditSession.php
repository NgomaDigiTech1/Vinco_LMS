<?php

namespace App\Http\Livewire\Backend\Sessions;

use App\Models\AcademicYear;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\Redirector;

class EditSession extends Component
{
    public string|null $start_date = null;
    public string|null $end_date = null;
    public AcademicYear $academic;

    public function rules(): array
    {
        return [
            'start_date' => [
                'required',
                'date',
                'before:end_date',
            ],
            'end_date' => [
                'required',
                'date',
                'after:start_date',
            ],
        ];
    }

    public function mount(AcademicYear $academic)
    {
        $this->academic = $academic;
        $this->start_date = $academic->start_date;
        $this->end_date = $academic->end_date;
    }

    public function render(): Renderable
    {
        return view('livewire.backend.sessions.edit-session');
    }

    public function updateSessions(): RedirectResponse|Redirector
    {
        $sessions = $this->validate();

        $this->academic->update($sessions);

        return redirect()->route(
            route: 'admins.academic.session.index'
        );
    }
}
