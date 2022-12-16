@extends('backend.layout.base')

@section('title')
    Annee Academique
@endsection

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Annee academique</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        @can('academic-year-create')
                                            <li class="nk-block-tools-opt">
                                                <a class="btn btn-dim btn-primary btn-sm" href="{{ route('admins.academic.session.create') }}">
                                                    <em class="icon ni ni-plus"></em>
                                                    <span>Create</span>
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
                    <div class="row g-gs">
                        <div class="nk-block">
                            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head  text-center">
                                    <th class="nk-tb-col">
                                        <span>ID</span>
                                    </th>
                                    <th class="nk-tb-col">
                                        <span>Debut d'annee</span>
                                    </th>
                                    <th class="nk-tb-col">
                                        <span>FIn d'annee</span>
                                    </th>
                                    <th class="nk-tb-col nk-tb-col-tools">
                                        <span>ACTION</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($academics as $academic)
                                    <livewire:backend.sessions.listen-session :academic="$academic" />
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
