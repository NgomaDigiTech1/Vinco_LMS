<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\ResultRepositoryInterface;
use App\Http\Requests\ProfessorRequest;
use App\Http\Requests\ProfessorUpdateRequest;
use App\Services\ToastMessageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final class ResultBackendController extends BackendBaseController
{
    public function __construct(
        protected readonly ResultRepositoryInterface $repository,
        public ToastMessageService $factory
    ) {
        parent::__construct($this->factory);
    }

    public function index(): Renderable
    {
        $results = $this->repository->results();

        return view('backend.domain.exam.result.index', compact('results'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.exam.result.create');
    }

    public function store(ProfessorRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes);

        return to_route('admins.exam.schedule.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        return view('backend.domain.exam.result.edit', [
            'professor' => $this->repository->showResult(key: $key),
        ]);
    }

    public function update(ProfessorUpdateRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);

        return to_route('admins.exam.schedule.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        return back();
    }
}
