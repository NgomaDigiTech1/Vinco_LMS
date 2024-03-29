@extends('backend.layout.base')

@section('title')
    Create Lesson
@endsection

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title mt-2">Creation des lecon</h6>
                            <a class="btn btn-dim btn-primary btn-sm  active-link mt-2" href="{{ route('admins.academic.lessons.index') }}">
                                <em class="icon ni ni-arrow-left"></em>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8 mt-4">
                                    <x-error-messages/>
                                    <form action="{{ route('admins.academic.lessons.store') }}" method="post" class="form-validate" novalidate="novalidate" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-gs">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Titre du lecon</label>
                                                    <div class="form-control-wrap">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('name') error @enderror"
                                                            id="name"
                                                            name="name"
                                                            value="{{ old('name') }}"
                                                            placeholder="Saisir le nom du cours"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                if (auth()->user()->hasRole('Super Admin')) {
                                                    $types = \App\Models\LessonType::query()
                                                        ->select(['id', 'name'])
                                                        ->get();

                                                    $chapters = \App\Models\Chapter::query()
                                                        ->select(['id', 'name', 'course_id'])
                                                        ->with('course')
                                                        ->get();
                                                } else {
                                                    $types = \App\Models\LessonType::query()
                                                        ->select(['id', 'name'])
                                                        ->get();

                                                    $chapters = \App\Models\Chapter::query()
                                                        ->select(['id', 'name', 'course_id'])
                                                        ->with('course')
                                                        ->whereHas('course', function ($builder) {
                                                            $builder->where('institution_id', auth()->user()->institution->id);
                                                        })
                                                        ->get();
                                                }
                                            @endphp

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="chapter">Chapitre</label>
                                                    <select
                                                        class="form-control js-select2 select2-hidden-accessible @error('chapter') error @enderror"
                                                        data-search="on"
                                                        id="chapter"
                                                        name="chapter"
                                                        data-placeholder="Select chapter"
                                                        required>
                                                        <option label="Select chapter" value=""></option>
                                                        @foreach($chapters as $chapter)
                                                            <option value="{{ $chapter->id }}">
                                                                {{ $chapter->name }} / (<small>{{ ucfirst($chapter->course->name) ?? "" }}</small>)
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="type">Type</label>
                                                    <select
                                                        class="form-control js-select2 select2-hidden-accessible @error('type') error @enderror"
                                                        data-search="on"
                                                        id="type"
                                                        name="type"
                                                        data-placeholder="Select Type"
                                                        required>
                                                        <option label="Select Type" value=""></option>
                                                        @foreach($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="video-lesson">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="video_lesson">Video</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="file"
                                                                class="form-control @error('video_lesson') error @enderror"
                                                                id="video_lesson"
                                                                name="video_lesson"
                                                                value="{{ old('video_lesson') }}"
                                                                placeholder="Select Video Format"
                                                                >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="pdf-lesson">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="pdf_lesson">Format PDF</label>
                                                        <div class="form-control-wrap">
                                                            <input
                                                                type="file"
                                                                class="form-control @error('pdf_lesson') error @enderror"
                                                                id="pdf_lesson"
                                                                name="pdf_lesson"
                                                                value="{{ old('pdf_lesson') }}"
                                                                placeholder="Select PDF Format"
                                                                >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="aperi">
                                                <span class="preview-title-lg overline-title">Aperi</span>
                                                <div class="container">
                                                    <div class="row">
{{--                                                        <div class="form-group">--}}
{{--                                                            <input--}}
{{--                                                                type="text"--}}
{{--                                                                class="form-control @error('name') error @enderror"--}}
{{--                                                                name="name"--}}
{{--                                                                value="{{ old('name') }}"--}}
{{--                                                                placeholder="Add your name">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <div class="form-control-wrap">--}}
{{--                                                                <input--}}
{{--                                                                    type="email"--}}
{{--                                                                    class="form-control @error('email') error @enderror"--}}
{{--                                                                    name="email"--}}
{{--                                                                    value="{{ old('email') }}"--}}
{{--                                                                    placeholder="Add your email address">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <div class="form-group">
                                                            <label for="date">Add date</label>
                                                            <input
                                                                type="date"
                                                                class="form-control @error('date') error @enderror"
                                                                name="date"
                                                                value="{{ old('date') }}"
                                                                required
                                                                placeholder="Add event date">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="startTime">Add your start time:</label>
                                                            <input
                                                                type="time"
                                                                class="form-control @error('startTime') error @enderror"
                                                                name="startTime"
                                                                required
                                                                value="{{ old('startTime') }}"
                                                                placeholder="Add your start time">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <label for="endTime">Add your end time:</label>
                                                                <input
                                                                    type="time"
                                                                    class="form-control @error('endTime') error @enderror"
                                                                    name="endTime"
                                                                    required
                                                                    value="{{ old('endTime') }}"
                                                                    placeholder="Add your end time">
                                                            </div>
                                                        </div>
{{--                                                        <div class="form-group">--}}
{{--                                                            <div class="form-control-wrap">--}}
{{--                                                                <input--}}
{{--                                                                    type="text"--}}
{{--                                                                    class="form-control @error('usersNumber') error @enderror"--}}
{{--                                                                    name="usersNumber"--}}
{{--                                                                    value="{{ old('usersNumber') }}"--}}
{{--                                                                    placeholder="Number of participants">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <div id="dynamic_field">--}}
{{--                                                                <div class="row text-center mb-2">--}}
{{--                                                                    <div class="col-md-9">--}}
{{--                                                                        <div class="form-control-wrap">--}}
{{--                                                                            <input--}}
{{--                                                                                type="email"--}}
{{--                                                                                name="guests[]"--}}
{{--                                                                                placeholder="participant's email address"--}}
{{--                                                                                class="form-control name_list"--}}
{{--                                                                                value="{{ old('guests[]') }}"--}}
{{--                                                                                id="task">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-md-3">--}}
{{--                                                                        <button type="button" name="add" id="add" class="btn btn-success">--}}
{{--                                                                            <em class="icon ni ni-plus"></em>--}}
{{--                                                                            Add--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <x-filter-department/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12" id="text">
                                                <div class="form-group">
                                                    <label class="form-label" for="content">Contenue</label>
                                                    <div class="form-control-wrap">
                                                        <textarea
                                                            class="form-control form-control-sm @error('content') error @enderror"
                                                            id="content"
                                                            name="content"
                                                            rows="5"
                                                            placeholder="Write the description"
                                                        >{{ old('content') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-md btn-primary">Save</button>
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
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            height: 260,
            resize: true,
            max_height: 500,
            icons: 'material',
            mobile: {
                menubar: true,
                plugins: 'autosave lists autolink',
                toolbar: 'undo bold italic styles'
            },
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount', 'emoticons'
            ],
            toolbar: 'undo redo | styles | bold italic | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'outdent indent | numlist bullist | emoticons',
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#text,#aperi,#pdf-lesson,#video-lesson").hide()
            $('#type').change(function () {
                let type = $(this).val();
                if (type == 1){
                    $('#video-lesson').show();
                    $("#text,#aperi,#pdf-lesson").hide()
                } else if (type == 2) {
                    $("#aperi").show();
                    $("#video-lesson,#text,#pdf-lesson").hide()
                } else if (type == 3) {
                    $("#text").show();
                    $("#aperi,#video-lesson,#pdf-lesson").hide()
                } else if (type == 4) {
                    $('#pdf-lesson').show();
                    $("#text,#aperi,#video-lesson").hide()
                }
            });
        })
    </script>

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
