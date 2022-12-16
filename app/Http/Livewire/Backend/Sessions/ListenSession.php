<?php

declare(strict_types=1);

namespace App\Http\Livewire\Backend\Sessions;

use App\Models\AcademicYear;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class ListenSession extends Component
{
    public AcademicYear $academic;

    protected $listeners = [
        'deleteSession' => '$refresh'
    ];
    
    public function render(): Renderable
    {
        return view('livewire.backend.sessions.listen-session');
    }
}
