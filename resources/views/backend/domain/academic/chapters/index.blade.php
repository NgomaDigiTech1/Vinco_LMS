@extends('backend.layout.base')

@section('title')
    Chapters Lists
@endsection

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Liste des chapitres</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        @can('chapitre-create')
                                            <li class="nk-block-tools-opt">
                                                <a class="btn btn-dim btn-primary btn-sm" href="{{ route('admins.academic.chapter.create') }}">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>Add</span>
                                                </a>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a class="btn btn-dim btn-secondary btn-sm" href="{{ route('admins.course.history') }}">
                                                    <em class="icon ni ni-histroy"></em>
                                                    <span>Corbeille</span>
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col">
                                <span>N° CHAPITRE</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>COURS</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>TITRE DU CHAPITRE</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>LEÇONS</span>
                            </th>
                            <th class="nk-tb-col nk-tb-col-tools text-center">
                                <span>ACTION</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ $chapter->id ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">
                                        {{ ucfirst(substr($chapter->course->name, 0, 16)) ?? ""}}...
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ ucfirst($chapter->name) }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">
                                        Nb Leçons : {{ $chapter->lessons_count ?? 0 }}
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                        <span class="tb-lead">
                                            <div class="d-flex justify-content-center">
                                                @can('chapitre-read')
                                                    <a href="{{ route('admins.academic.chapter.show', $chapter->id) }}" class="btn btn-dim btn-primary btn-sm ml-1">
                                                        <em class="icon ni ni-eye"></em>
                                                    </a>
                                                @endcan
                                            </div>
                                        </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
