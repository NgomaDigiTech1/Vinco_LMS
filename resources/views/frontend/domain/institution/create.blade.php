@extends('frontend.layout.register')

@section('title')
    Creation des institutions
@endsection

@section('content')
    <div>
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Register Institution</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <div class="toggle-expand-content" data-content="more-options">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a class="btn btn-dim btn-primary btn-sm"
                                                   href="{{ route('home.index') }}">
                                                    <em class="icon ni ni-arrow-left"></em>
                                                    <span>Back</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-inner">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form method="post" action="{{ route('institution.store') }}" class="form-validate mt-2" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row g-gs">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Nom Institution</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_name') error @enderror"
                                                                id="name"
                                                                name="institution_name"
                                                                value="{{ old('institution_name') }}"
                                                                placeholder="Enter Institution Name"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="institution_country">Country</label>
                                                        <select
                                                            class="form-control js-select2 select2-hidden-accessible @error('institution_country') error @enderror"
                                                            id="institution_country"
                                                            data-search="on"
                                                            name="institution_country"
                                                            data-placeholder="Select a country"
                                                            required>
                                                            @include('frontend.partial._country')
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="town">Ville</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_town') error @enderror"
                                                                id="town"
                                                                name="institution_town"
                                                                value="{{ old('institution_town') }}"
                                                                placeholder="Enter Town of Institution"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_email') error @enderror"
                                                                id="email"
                                                                name="institution_email"
                                                                value="{{ old('institution_email') }}"
                                                                placeholder="Enter Email"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="institution_phones">Telephone</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_phones') error @enderror"
                                                                id="institution_phones"
                                                                name="institution_phones"
                                                                value="{{ old('institution_phones') }}"
                                                                placeholder="Enter phones Number"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="institution_website">Website</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_website') error @enderror"
                                                                id="institution_website"
                                                                name="institution_website"
                                                                value="{{ old('institution_website') }}"
                                                                placeholder="Enter Website"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="institution_address">Address</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="text"
                                                                class="form-control @error('institution_address') error @enderror"
                                                                id="institution_address"
                                                                name="institution_address"
                                                                value="{{ old('institution_address') }}"
                                                                placeholder="Enter Address"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="images">Image</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="file"
                                                                class="form-control @error('images') error @enderror"
                                                                id="images"
                                                                name="images"
                                                                value="{{ old('images') }}"
                                                                placeholder="Select image"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <em class="icon ni ni-save-fill mr-4"></em>
                                                            Enregistrer votre institution
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
