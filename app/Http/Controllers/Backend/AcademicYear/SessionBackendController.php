<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\AcademicYear;

use App\Contracts\AcademicYearRepositoryInterface;
use App\Http\Controllers\Backend\BackendBaseController;
use App\Services\ToastMessageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

final class SessionBackendController extends BackendBaseController
{
    public function __construct(
        public AcademicYearRepositoryInterface $repository,
        public ToastMessageService $factory
    ) {
        parent::__construct($this->factory);
    }

    public function index(): Renderable
    {
        abort_if(Gate::denies('academic-year-list'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $academics = $this->repository->getAcademicsYears();

        return view('backend.domain.academic.index')->with('academics', $academics);
    }

    public function create(): Renderable
    {
        return view('backend.domain.academic.create');
    }

    public function edit(int $session): Factory|View|Application
    {
        $academic = $this->repository->show($session);

        return view('backend.domain.academic.edit', compact('academic'));
    }
}
