<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\UsersRepositoryInterface;
use App\Http\Requests\UserRequest;
use App\Services\ToastMessageService;
use App\ViewModels\Backend\Admin\AdminViewModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\View;

final class UsersBackendController extends BackendBaseController
{
    public function __construct(
        public ToastMessageService $factory,
        public UsersRepositoryInterface $repository,
    ) {
        parent::__construct($this->factory);
    }

    public function index(): Renderable
    {
        $admins = $this->repository->getUsers();

        return View::make('backend.domain.users.admin.index', compact('admins'));
    }

    public function create(): Factory|\Illuminate\Contracts\View\View|Application
    {
        $viewModel = new AdminViewModel();

        return view('backend.domain.users.admin.create', compact('viewModel'));
    }

    public function store(UserRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes);

        $this->factory->success(
            'success',
            "un admin ajouter avec success"
        );

        return to_route('admins.users.admin.index');
    }

    public function show(string $key): Renderable
    {
        $admin = $this->repository->showUser(key: $key);

        return view('backend.domain.users.admin.show', compact('admin'));
    }

    public function edit(string $key): Factory|\Illuminate\Contracts\View\View|Application
    {
        $admin = $this->repository->showUser(key: $key);

        return view('backend.domain.users.admin.edit', compact('admin'));
    }

    public function update(UserRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);

        $this->factory->success(
            'success',
            "un admin modifier avec success"
        );

        return to_route('admins.users.admin.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        $this->factory->success(
            'success',
            "un admin supprimer avec success"
        );

        return to_route('admins.users.admin.index');
    }
}
