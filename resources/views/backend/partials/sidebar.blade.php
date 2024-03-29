@php
    $role = '';
    $roles = auth()->user()->roles;
    foreach ($roles as $rol){
        $role = $rol;
    }
@endphp

<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admins.backend.home') }}" class="logo-link nk-sidebar-logo">
                @if($role->name == 'Super Admin')
                    <img
                        class="logo-light logo-img h-100 w-100"
                        src="{{ asset('assets/favicon.svg') }}"
                        srcset="{{ asset('assets/favicon.svg') }} 3x"
                        alt="logo">
                    <img
                        class="logo-dark logo-img h-100 w-100"
                        src="{{ asset('assets/favicon.svg') }}"
                        srcset="{{ asset('assets/favicon.svg') }} 3x"
                        alt="logo-dark">
                    <img
                        class="logo-small logo-img h-100 w-100"
                        src="{{ asset('assets/favicon.svg') }}"
                        srcset="{{ asset('assets/favicon.svg') }} 3x"
                        alt="logo-small">
                @else
                    <img
                        class="logo-light logo-img h-100 w-100"
                        src="{{ asset('storage/'. auth()->user()->institution->institution_images) }}"
                        srcset="{{ asset('storage/'. auth()->user()->institution->institution_images) }} 3x"
                        alt="logo">
                @endif
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
                <em class="icon ni ni-menu"></em>
            </a>
        </div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    @include('backend.components._link', [
                        'route' => route('admins.backend.home'),
                        'name' => "Dashboard",
                        'icon' => "ni-home-alt"
                    ])

                    @hasrole('Parent')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-book-read"></em>
                                    </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.departments.index'),
                                    'name' => "Department"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.filiaire.index'),
                                    'name' => "Filiaire"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.promotion.index'),
                                    'name' => "Promotion"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Devoir (TP)"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        @include('backend.components._link', [
                            'route' => route('admins.accounting.fees.index'),
                            'name' => "Fee",
                            'icon' => "ni-coin-alt"
                        ])
                        @include('backend.components._link', [
                            'route' => route('admins.users.teacher.index'),
                            'name' => "Teacher",
                            'icon' => "ni-user"
                        ])
                    @endhasrole

                    @hasrole('Etudiant')

                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-book-read"></em>
                                    </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.chapter.index'),
                                    'name' => "Chapitre"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.lessons.index'),
                                    'name' => "Lecon"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Devoir (TP)"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-edit-alt"></em>
                                    </span>
                                <span class="nk-menu-text">Exam</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam.index'),
                                    'name' => "Exam List"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam-result.index'),
                                    'name' => "Exam Result"
                                ])
                            </ul>
                        </li>
                        @include('backend.components._link', [
                            'route' => route('admins.users.teacher.index'),
                            'name' => "Teachers",
                            'icon' => "ni-user"
                        ])
                    @endhasrole

                    @hasrole('Manager')
                        @include('backend.components._link', [
                            'route' => route('admins.academic.session.index'),
                            'name' => "Annee academique",
                            'icon' => "ni-calendar-alt"
                        ])
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-book-read"></em>
                                            </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.campus.index'),
                                    'name' => "Campus"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.departments.index'),
                                    'name' => "Department"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.filiaire.index'),
                                    'name' => "Filiaire"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.promotion.index'),
                                    'name' => "Promotion"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.categories.index'),
                                    'name' => "Categories"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.chapter.index'),
                                    'name' => "Chapitre"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.lessons.index'),
                                    'name' => "Lecon"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Devoir (TP)"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-coin-alt"></em>
                                        </span>
                                <span class="nk-menu-text">Accounting</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.announce.feesTypes.index'),
                                    'name' => "Fees Type"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.accounting.fees.index'),
                                    'name' => "Fees"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-edit-alt"></em>
                                            </span>
                                <span class="nk-menu-text">Exam</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam.index'),
                                    'name' => "Exam List"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.schedule.index'),
                                    'name' => "Schedule"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam-result.index'),
                                    'name' => "Exam Result"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-users"></em>
                                        </span>
                                <span class="nk-menu-text">Users</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.users.teacher.index'),
                                    'name' => "Teacher"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.student.index'),
                                    'name' => "Student"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.guardian.index'),
                                    'name' => "Parents"
                                ])
                            </ul>
                        </li>
                    @endhasrole

                    @hasrole('Admin')
                        @include('backend.components._link', [
                            'route' => route('admins.academic.session.index'),
                            'name' => "Annee academique",
                            'icon' => "ni-calendar-alt"
                        ])
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-book-read"></em>
                                </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.campus.index'),
                                    'name' => "Campus"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.departments.index'),
                                    'name' => "Department"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.filiaire.index'),
                                    'name' => "Filiaire"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.promotion.index'),
                                    'name' => "Promotion"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.categories.index'),
                                    'name' => "Categories"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.chapter.index'),
                                    'name' => "Chapitre"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.lessons.index'),
                                    'name' => "Lecon"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Devoir (TP)"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-coin-alt"></em>
                                            </span>
                                <span class="nk-menu-text">Accounting</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.announce.feesTypes.index'),
                                    'name' => "Fees Type"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.accounting.fees.index'),
                                    'name' => "Fees"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-edit-alt"></em>
                                                </span>
                                <span class="nk-menu-text">Exam</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam.index'),
                                    'name' => "Exam List"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.schedule.index'),
                                    'name' => "Schedule"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam-result.index'),
                                    'name' => "Exam Result"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-users"></em>
                                            </span>
                                <span class="nk-menu-text">Users</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.users.teacher.index'),
                                    'name' => "Teacher"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.student.index'),
                                    'name' => "Student"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.guardian.index'),
                                    'name' => "Parents"
                                ])
                            </ul>
                        </li>
                    @endhasrole

                    @hasrole('Professeur')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-book-read"></em>
                                            </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.campus.index'),
                                    'name' => "Campus"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.departments.index'),
                                    'name' => "Department"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.filiaire.index'),
                                    'name' => "Filiaire"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.promotion.index'),
                                    'name' => "Promotion"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.categories.index'),
                                    'name' => "Categories"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.chapter.index'),
                                    'name' => "Chapitre"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.lessons.index'),
                                    'name' => "Lecon"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Homework"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-coin-alt"></em>
                                            </span>
                                <span class="nk-menu-text">Accounting</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.announce.feesTypes.index'),
                                    'name' => "Fees Type"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.accounting.fees.index'),
                                    'name' => "Fees"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-icon">
                                                    <em class="icon ni ni-edit-alt"></em>
                                                </span>
                                <span class="nk-menu-text">Exam</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam.index'),
                                    'name' => "Exam List"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.schedule.index'),
                                    'name' => "Schedule"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam-result.index'),
                                    'name' => "Exam Result"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon">
                                                <em class="icon ni ni-users"></em>
                                            </span>
                                <span class="nk-menu-text">Users</span>
                            </a>
                            <ul class="nk-menu-sub">

                                @include('backend.components._links', [
                                    'route' => route('admins.users.teacher.index'),
                                    'name' => "Teacher"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.student.index'),
                                    'name' => "Student"
                                ])

                                @include('backend.components._links', [
                                    'route' => route('admins.users.guardian.index'),
                                    'name' => "Parents"
                                ])
                            </ul>
                        </li>
                    @endhasrole

                    @hasrole('Super Admin')
                        @include('backend.components._link', [
                            'route' => route('admins.academic.session.index'),
                            'name' => "Annee academique",
                            'icon' => "ni-calendar-alt"
                        ])
                        @include('backend.components._link', [
                            'route' => route('admins.institution.index'),
                            'name' => "Institution",
                            'icon' => "ni-building"
                        ])
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-users"></em>
                                </span>
                                <span class="nk-menu-text">Users</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.users.admin.index'),
                                    'name' => "Administrateur"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.users.staffs.index'),
                                    'name' => "Gestionnaire"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.users.teacher.index'),
                                    'name' => "Professeur"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.users.student.index'),
                                    'name' => "Etudiant"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.users.guardian.index'),
                                    'name' => "Parent"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-book-read"></em>
                                </span>
                                <span class="nk-menu-text">Academic</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.campus.index'),
                                    'name' => "Campus"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.departments.index'),
                                    'name' => "Department"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.filiaire.index'),
                                    'name' => "Filiaire"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.promotion.index'),
                                    'name' => "Promotion"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.categories.index'),
                                    'name' => "Categories"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.course.index'),
                                    'name' => "Cours"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.chapter.index'),
                                    'name' => "Chapitre"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.lessons.index'),
                                    'name' => "Lecon"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.resource.index'),
                                    'name' => "Resource"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.exercice.index'),
                                    'name' => "Exercice"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.homework.index'),
                                    'name' => "Devoir (TP)"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.academic.interro.index'),
                                    'name' => "Interro"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-coin-alt"></em>
                                </span>
                                <span class="nk-menu-text">Accounting</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.announce.feesTypes.index'),
                                    'name' => "Fees Type"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.accounting.fees.index'),
                                    'name' => "Fees"
                                ])
                            </ul>
                        </li>
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-edit-alt"></em>
                                    </span>
                                <span class="nk-menu-text">Exam</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @include('backend.components._links', [
                                    'route' => route('admins.exam.session-exams.index'),
                                    'name' => "Session Examens"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam.index'),
                                    'name' => "Exam List"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.exam.schedule.index'),
                                    'name' => "Schedule"
                                ])
                                @include('backend.components._links', [
                                    'route' => route('admins.exam.exam-result.index'),
                                    'name' => "Exam Result"
                                ])
                            </ul>
                        </li>
                        @include('backend.components._link', [
                            'route' => route('admins.permissions.index'),
                            'name' => "Permission",
                            'icon' => "ni-shield-star"
                        ])
                        @include('backend.components._link', [
                            'route' => route('admins.roles.index'),
                            'name' => "Role",
                            'icon' => "ni-lock-alt"
                        ])
                        @include('backend.components._link', [
                            'route' => route('admins.settings.index'),
                            'name' => "Parametre",
                            'icon' => "ni-setting-alt"
                        ])
                        @include('backend.components._link', [
                            'route' => route('admins.communication.calendar.index'),
                            'name' => "Go To Communication",
                            'icon' => "ni-book"
                        ])
                    @endhasrole

                    <li class="nk-menu-item">
                        <a class="nk-menu-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="nk-menu-icon">
                                <em class="icon ni ni-signout"></em>
                            </span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
