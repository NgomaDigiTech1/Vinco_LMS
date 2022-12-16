<?php

namespace App\Http\Livewire\Backend\Sessions;

use App\Models\AcademicYear;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class DeleteSession extends Component
{
    public AcademicYear $academic;

    public function render(): Renderable
    {
        return view('livewire.backend.sessions.delete-session');
    }

    public function destroy()
    {
        sleep(6);
        $this->academic->delete();
        $this->emitTo(ListenSession::class, 'deleteSession');
    }
}
