<?php

use App\Http\Controllers\Backend\ChapterBackendController;
use App\Http\Controllers\Backend\CourseBackendController;
use App\Http\Controllers\Backend\TrashedChapterBackendController;
use App\Http\Controllers\Backend\TrashedCourseBackendController;
use App\Http\Controllers\Frontend\AboutAppController;
use App\Http\Controllers\Frontend\CalendarAppController;
use App\Http\Controllers\Frontend\EventAppController;
use App\Http\Controllers\Frontend\FeesAppController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\LibraryAppController;
use App\Http\Controllers\Frontend\ShortCoursesAppController;
use App\Http\Controllers\Backend\AcademicYearBackendController;
use App\Http\Controllers\Backend\CampusBackendController;
use App\Http\Controllers\Backend\CategoryBackendController;
use App\Http\Controllers\Backend\DepartmentBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\PersonnelBackendController;
use App\Http\Controllers\Backend\ProfessorBackendController;
use App\Http\Controllers\Backend\TrashedCampusBackendController;
use App\Http\Controllers\Backend\TrashedCategoryBackendController;
use App\Http\Controllers\Backend\TrashedDepartmentBackendController;
use App\Http\Controllers\Backend\TrashedPersonnelBackendController;
use App\Http\Controllers\Backend\TrashedProfessorBackendController;
use App\Http\Controllers\Backend\TrashedUsersBackendController;
use App\Http\Controllers\Backend\UsersBackendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::group([
        'prefix' => 'admins',
        'as' => 'admins.',
        'middleware' => ['admins']
    ], function(){
        Route::get('backend', [HomeBackendController::class, 'index'])->name('backend.home');
        Route::resource('personnel', PersonnelBackendController::class);
        Route::resource('professors', ProfessorBackendController::class);
        Route::resource('academic-years', AcademicYearBackendController::class);
        Route::resource('campus', CampusBackendController::class);
        Route::resource('departments', DepartmentBackendController::class);
        Route::resource('categories', CategoryBackendController::class);
        Route::resource('administrator', UsersBackendController::class);
        Route::resource('course', CourseBackendController::class);
        Route::controller(ChapterBackendController::class)->group(function (){
            Route::get('course/{course}/chapters', 'create')->name('chapters.create');
            Route::post('chapters', 'store')->name('chapters.store');
            Route::get('course/{course}/chapters/{chapter}', 'show')->name('chapters.show');
            Route::get('course/{course}/chapters/{chapter}/edit', 'edit')->name('chapters.edit');
            Route::put('chapters/{chapter}/update', 'update')->name('chapters.update');
            Route::delete('chapters/{chapter}', 'destroy')->name('chapters.destroy');
        });

        Route::controller(TrashedCampusBackendController::class)->group(function (){
            Route::get('historyCampus/', 'index')->name('campus.history');
            Route::put('restoreCampus/{key}', 'restore')->name('campus.restore');
            Route::delete('deleteCampus/{key}', 'destroy')->name('campus.remove');
        });

        Route::controller(TrashedPersonnelBackendController::class)->group(function (){
            Route::get('historyPersonnel/', 'index')->name('personnel.history');
            Route::put('restorePersonnel/{key}', 'restore')->name('personnel.restore');
            Route::delete('deletePersonnel/{key}', 'destroy')->name('personnel.remove');
        });

        Route::controller(TrashedDepartmentBackendController::class)->group(function (){
            Route::get('historyDepartment/', 'index')->name('departments.history');
            Route::put('restoreDepartment/{key}', 'restore')->name('departments.restore');
            Route::delete('deleteDepartment/{key}', 'destroy')->name('departments.remove');
        });

        Route::controller(TrashedProfessorBackendController::class)->group(function (){
            Route::get('historyProfessors/', 'index')->name('professors.history');
            Route::put('restoreProfessors/{key}', 'restore')->name('professors.restore');
            Route::delete('deleteProfessors/{key}', 'destroy')->name('professors.remove');
        });

        Route::controller(TrashedCategoryBackendController::class)->group(function (){
            Route::get('historyCategories/', 'index')->name('categories.history');
            Route::put('restoreCategories/{key}', 'restore')->name('categories.restore');
            Route::delete('deleteCategories/{key}', 'destroy')->name('categories.remove');
        });

        Route::controller(TrashedUsersBackendController::class)->group(function (){
            Route::get('historyUsers/', 'index')->name('administrator.history');
            Route::put('restoreUsers/{key}', 'restore')->name('administrator.restore');
            Route::delete('deleteUsers/{key}', 'destroy')->name('administrator.remove');
        });

        Route::controller(TrashedCourseBackendController::class)->group(function (){
            Route::get('historyCourse/', 'index')->name('course.history');
            Route::put('restoreCourse/{key}', 'restore')->name('course.restore');
            Route::delete('deleteCourse/{key}', 'destroy')->name('course.remove');
        });

        Route::controller(TrashedChapterBackendController::class)->group(function (){
            Route::get('historyChapter/', 'index')->name('chapters.history');
            Route::put('restoreChapter/{key}', 'restore')->name('chapters.restore');
            Route::delete('deleteChapter/{key}', 'destroy')->name('chapters.remove');
        });

        Route::put('activate/{key}/active', [PersonnelBackendController::class, 'active'])->name('personnel.active');
        Route::put('changeStatus/{key}/active', [CampusBackendController::class, 'activate'])->name('campus.active');
        Route::put('activeDepartment/{key}/update', [DepartmentBackendController::class, 'activate'])->name('department.active');
        Route::put('activeProfessor/{key}/update', [ProfessorBackendController::class, 'activate'])->name('professors.active');
        Route::put('activeCategory/{key}/update', [CategoryBackendController::class, 'activate'])->name('categories.active');
        Route::put('activeUsers/{key}/update', [UsersBackendController::class, 'activate'])->name('administrator.active');
        Route::put('activeCourse/{key}/update', [CourseBackendController::class, 'activate'])->name('course.active');
        //Route::put('activeChapter/course/{course}/chapter/{key}/update', [ChapterBackendController::class, 'activate'])->name('course.active');
    });
});

Route::get('/', [HomeFrontendController::class, 'index'])->name('home.index');
Route::get('about', [AboutAppController::class, 'index'])->name('about.index');
Route::get('short-courses', [ShortCoursesAppController::class, 'index'])->name('courses.index');
Route::get('calendar', [CalendarAppController::class, 'index'])->name('calendar.index');
Route::get('fees', [FeesAppController::class, 'index'])->name('fees.index');
Route::get('events', [EventAppController::class, 'index'])->name('events.index');
Route::get('library', [LibraryAppController::class, 'index'])->name('library.index');
