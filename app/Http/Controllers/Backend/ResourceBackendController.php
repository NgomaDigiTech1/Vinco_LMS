<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\ResourceRepositoryInterface;
use App\Http\Requests\ResourceRequest;
use App\Http\Requests\ResourceUpdateRequest;
use App\Services\ToastMessageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Response;

final class ResourceBackendController extends BackendBaseController
{
    public function __construct(
        public ToastMessageService $factory,
        protected readonly ResourceRepositoryInterface $repository
    ) {
        parent::__construct($this->factory);
    }

    public function index(): Renderable
    {
        $resources = $this->repository->resources();

        return view('backend.domain.academic.resource.index', compact('resources'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.academic.resource.create');
    }

    public function store(ResourceRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes);

        return to_route('admins.academic.resource.index');
    }

    public function show(string $key): Factory|View|Application
    {
        $resource = $this->repository->showResource(key:  $key);

        return view('backend.domain.academic.resource.show', compact('resource'));
    }

    public function edit(string $key): HttpResponse
    {
        $resource = $this->repository->showResource(key:  $key);

        return Response::view('backend.domain.academic.resource.edit', compact('resource'));
    }

    public function update(string $key, ResourceUpdateRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);

        return to_route('admins.academic.resource.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        return back();
    }
}
