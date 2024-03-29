@extends('backend.layout.communication')

@section('title', "Notification")

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Book List</h3>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                        <thead>
                        <tr class="nk-tb-item nk-tb-head text-center">
                            <th class="nk-tb-col">
                                <span>IMAGE</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>TITLE</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>NOMBRE DE PAGE</span>
                            </th>
                            <th class="nk-tb-col">
                                <span>AUTEUR</span>
                            </th>
                            <th class="nk-tb-col nk-tb-col-tools text-center">
                                <span>ACTIONS</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr class="nk-tb-item text-center">
                                <td class="nk-tb-col">
                                        <span class="tb-product">
                                            <img
                                                src="{{ url($book['thumbnailUrl']) }}"
                                                alt="{{ $book['title'] }}"
                                                class="thumb img-fluid rounded-circle">
                                        </span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ $book['title'] ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">{{ $book['pageCount'] ?? "" }}</span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">
                                        @foreach($book['authors'] as $author)
                                            {{$author}} -
                                        @endforeach
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="tb-lead">
                                        <div class="d-flex">
                                                <a href="{{route('admins.communication.library.create')}}"
                                                   class="btn btn-dim btn-primary btn-sm ml-1">
                                                    <em class="icon ni ni-eye"></em>
                                                </a>
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
