<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Communication;

use App\Contracts\EventRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * @EventsBackendController
 */
final class EventsBackendController extends Controller
{
    public function __construct(
        protected readonly EventRepositoryInterface $repository
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application
    {
//        $calendar = $this->repository->events();

        $eloquentEvent = Event::all(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        $calendar = \Calendar::addEvents($eloquentEvent);

        return view('backend.domain.communication.events.index', compact('calendar', 'eloquentEvent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory|Application
    {
        return \view('backend.domain.communication.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request): RedirectResponse
    {
        $this->repository->stored(attributes: $request);

        return redirect()->route('admins.communication.events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View|Factory|Application
    {
        $event = $this->repository->showEvent($id);

        return  \view('backend.domain.communication.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, string $id): RedirectResponse
    {
        $this->repository->updated(key: $id, attributes: $request);

        return redirect()->route('admins.communication.events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     */
    public function destroy($id): RedirectResponse
    {
        $this->repository->deleted(key: $id);

        return  back();
    }
}
