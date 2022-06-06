<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\DepartmentRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\DepartmentStatusRequest;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;
use function Pest\Laravel\delete;

class DepartmentBackendController extends Controller
{
    public function __construct(
        public DepartmentRepositoryInterface $repository,
        public SweetAlertFactory $factory
    ) {
    }

    public function index(): Renderable
    {
        return view('backend.domain.academic.campus.departments.index', [
            'departments' => $this->repository->getDepartments(),
        ]);
    }

    public function show(string $key): Factory|View|Application
    {
        return view('backend.domain.academic.campus.departments.show', [
            'department' => $this->repository->showDepartment(key:  $key),
        ]);
    }

    public function create(): Renderable
    {
        return view('backend.domain.academic.campus.departments.create');
    }

    public function store(DepartmentRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes, factory: $this->factory);

        return to_route('admins.departments.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        return view('backend.domain.academic.campus.departments.edit', [
            'department' => $this->repository->showDepartment(key:  $key),
        ]);
    }

    public function update(string $key, DepartmentRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes, factory: $this->factory);

        return Response::redirectToRoute('admins.departments.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key, factory: $this->factory);

        return Response::redirectToRoute('admins.departments.index');
    }

    public function activate(DepartmentStatusRequest $request): JsonResponse
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
