<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\TrashedDepartmentRepositoryInterface;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;

final class TrashedDepartmentBackendController extends \App\Http\Controllers\Controller
{
    public function __construct(
        public SweetAlertFactory $alertFactory,
        public TrashedDepartmentRepositoryInterface $repository
    ) {
    }

    public function index(): Renderable
    {
        return view('backend.domain.academic.campus.trashed.index', [
            'departments' => $this->repository->getTrashes(),
        ]);
    }

    public function restore(string $key): RedirectResponse
    {
        $this->repository->restore(key: $key, alert: $this->alertFactory);

        return Response::redirectToRoute('admins.academic.departments.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key, alert: $this->alertFactory);

        return Response::redirectToRoute('admins.academic.departments.index');
    }
}
