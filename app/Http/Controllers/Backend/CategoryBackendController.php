<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ConfirmedCategoryRequest;
use App\Contracts\CategoryRepositoryInterface;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class CategoryBackendController extends Controller
{
    public function __construct(
        public CategoryRepositoryInterface $repository,
        public SweetAlertFactory $flasher
    ) {
    }

    public function index(): Renderable
    {
        return view('backend.domain.academic.categories.index', [
            'categories' => $this->repository->getCategories(),
        ]);
    }

    public function show(string $key): Renderable
    {
        return view('backend.domain.academic.categories.show', [
            'category' => $this->repository->showCategory(key: $key),
        ]);
    }

    public function create(): Renderable
    {
        return view('backend.domain.academic.categories.create');
    }

    public function store(CategoryRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes:  $attributes, flash: $this->flasher);

        return to_route('admins.academic.categories.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        return view('backend.domain.academic.categories.edit', [
            'category' => $this->repository->showCategory(key: $key),
        ]);
    }

    public function update(string $key, CategoryRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes, flash: $this->flasher);

        return to_route('admins.academic.categories.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key, flash: $this->flasher);

        return back();
    }

    public function activate(ConfirmedCategoryRequest $request): JsonResponse
    {
        $employee = $this->repository->changeStatus(attributes: $request);
        if ($employee) {
            return response()->json([
                'message' => 'The status has been successfully updated',
            ]);
        }

        return response()->json([
            'message' => 'Desoler',
        ]);
    }
}
