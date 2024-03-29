@extends('backend.layout.base')

@section('title')
    Create Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Create Student</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <a class="btn btn-outline-primary btn-sm"
                                               href="{{ $viewModel->indexUrl }}">
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
                                <div class="col-md-7">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ $viewModel->storeUrl }}" method="post" class="form-validate mt-2" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Prénom</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('name') error @enderror"
                                                            id="name"
                                                            name="name"
                                                            value="{{ old('name') }}"
                                                            placeholder="Enter Name"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="firstname">Nom</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('firstname') error @enderror"
                                                            id="firstname"
                                                            name="firstname"
                                                            value="{{ old('firstname') }}"
                                                            placeholder="Enter a FirstName"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="lastname">Post-Nom</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('lastname') error @enderror"
                                                            id="lastname"
                                                            name="lastname"
                                                            value="{{ old('lastname') }}"
                                                            placeholder="Enter Last Name"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="email">Email</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="email"
                                                            class="form-control @error('email') error @enderror"
                                                            id="email"
                                                            name="email"
                                                            value="{{ old('email') }}"
                                                            pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b"
                                                            placeholder="Enter Email"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <x-filter-department/>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Mot de passe</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="password"
                                                            class="form-control @error('password') error @enderror"
                                                            id="password"
                                                            name="password"
                                                            value="{{ old('password') }}"
                                                            placeholder="Enter password"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="parent">Parent</label>
                                                    <div class="form-control-wrap">
                                                        <select
                                                            class="form-control js-select2 select2-hidden-accessible @error('parent') error @enderror"
                                                            id="parent"
                                                            name="parent"
                                                            data-search="on"
                                                            data-placeholder="Select Parent"
                                                            >
                                                            <option label="parent" value=""></option>
                                                            @foreach($viewModel->guardians() as $parent)
                                                                <option
                                                                    value="{{ $parent->id }}"
                                                                >{{ ucfirst($parent->name_guardian ) ?? "" }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="admission">Admission Date</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="text"
                                                            class="form-control date-picker @error('admission') error @enderror"
                                                            id="admission"
                                                            name="admission"
                                                            data-date-format="yyyy-mm-dd"
                                                            value="{{ old('admission') }}"
                                                            placeholder="Select Admission Date"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
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


                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="gender">Gender</label> <br>
                                                    <ul class="custom-control-group g-3 align-center flex-wrap">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input
                                                                    type="radio"
                                                                    class="custom-control-input"
                                                                    checked=""
                                                                    name="gender"
                                                                    value="male"
                                                                    id="male">
                                                                <label class="custom-control-label" for="male">Homme</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio checked">
                                                                <input
                                                                    type="radio"
                                                                    class="custom-control-input"
                                                                    name="gender"
                                                                    value="female"
                                                                    id="female">
                                                                <label class="custom-control-label" for="female">Femme</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-md btn-outline-primary">Save</button>
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#department').change(function () {
                let department = $(this).val();
                if (department){
                    $.ajax({
                        type:'GET',
                        url:'{{ route("admins.academic.department-json") }}',
                        data:{"department" : department },
                        success:function(response){
                            $("#filiaire").empty();
                            $("#filiaire").append('<option label="Filiaire" value=""></option>');
                            if(response && response?.status === 'success'){
                                response?.filiaires?.map((filiaire) => {
                                    $("#filiaire").append('<option value="'+filiaire.id+'">'+filiaire.name+'</option>');
                                })
                            }
                        }
                    })
                }
            });

            $('#filiaire').change(function () {
                let filiaire = $(this).val();
                if(filiaire){
                    $.ajax({
                        type:"GET",
                        url:"{{ route('admins.academic.promotion-json') }}",
                        data : { "filiaire" : filiaire },
                        success:function(response){
                            $("#promotion").empty();
                            $("#promotion").append('<option label="Promotion" value=""></option>');
                            if(response && response?.status === 'success'){
                                response?.promotions?.map((filiaire) => {
                                    $("#promotion").append('<option value="'+filiaire.id+'">'+filiaire.name+'</option>');
                                })
                            }
                        }
                    });
                }
            })
        })
    </script>
@endsection
