<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//basic routes
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login'])->name('login');


Route::post('/oauth/token', [AccessTokenController::class, 'issueToken'])
    ->middleware(['throttle'])
    ->name('passport.token');

// middleware
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/user', [UserController::class, 'show']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::put('/user', [UserController::class, 'update']);
    Route::post('/user/password', [UserController::class, 'updatePassword']);

    //Students
    Route::get('/students/add', [UserController::class, 'createStudent'])->name('student.create.show');
    Route::get('/students/view/list', [UserController::class, 'getStudentList'])->name('student.list.show');
    Route::get('/students/view/profile/{id}', [UserController::class, 'showStudentProfile'])->name('student.profile.show');


});

// Courses
//    Route::get('courses/teacher/index', [AssignedTeacherController::class, 'getTeacherCourses'])->name('course.teacher.list.show');
Route::get('courses/student/index/{student_id}', [CourseController::class, 'getStudentCourses'])->name('course.student.list.show');
//    Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
