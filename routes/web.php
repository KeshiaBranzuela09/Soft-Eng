<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SearchQery\SearchQueryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StorageController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\Teacher\DashboardController as TeacherDashboardController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;

Route::get('/', [SearchQueryController::class, 'index'])->name('query.index');

Route::get('/login', [AuthenticationController::class, 'loginView'])->name('login.view');

Route::post('/login/post', [AuthenticationController::class, 'authenticate'])->name('login.post');

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/storage', [StorageController::class, 'index'])->name('admin.storage.index');

    // ManageUsers
    Route::get('/manageuser', [ManageUsersController::class, 'index'])->name('admin.manageuser.index');
    Route::get('/manageuser/create', [ManageUsersController::class, 'addForm'])->name('admin.manageuser.create');
    Route::post('/manageuser/store', [ManageUsersController::class, 'store'])->name('admin.manageuser.store');
    // Route::get('/manageuser/{id}/edit', [ManageUsersController::class, 'edit'])->name('manageuser.edit');
    // Route::put('/manageuser/{id}', [ManageUsersController::class, 'update'])->name('manageuser.update');
    // Route::delete('/manageuser/{id}', [ManageUsersController::class, 'destroy'])->name('manageuser.destroy');



});

Route::prefix('/student')->middleware('student')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard.index');
});


Route::prefix('/teacher')->middleware('teacher')->group(function () {
    Route::get('/dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard.index');
});


//👇 fuck this route what do you mean???
// Route::prefix('/test')->group(function (){
//     Route::get('/testlayout', [AdminController::class, 'test']);
// });

// Route::prefix('/')->group(function (){
//     Route::get('/', [QueryController::class, 'landing_page']);
//     Route::get('/results/', [QueryController::class, 'results_page']);
//     Route::get('/document/{id}', [QueryController::class, 'document_page']);
//     Route::get('/go/login', [QueryController::class, 'login_page']);
//     Route::get('/go/recovery', [RecoveryController::class, 'recovery_page']);
//     Route::get('/go/recovery/verify', [QueryController::class, 'otp_page']);

//     Route::post('/send', [QueryController::class, 'send'])->name('send');
//     Route::post('/insert-user', [QueryController::class, 'insertUser'])->name('insert.user');
// });

// Route::prefix('student')->group(function (){
//     Route::get('/', [StudentController::class, 'dashboard_page']);
//     Route::get('/submission/', [StudentController::class, 'submission_page']);
//     Route::get('/doc-status/', [StudentController::class, 'doc_status_page']);
//     Route::get('/pdf-reader/{id}', [StudentController::class, 'pdf_reader_page']);
//     Route::get('/account-setting/', [StudentController::class, 'account_setting_page']);

//     // Route::post(); // Back End

// });

// Route::prefix('teacher')->group(function (){
//     Route::get('/', [TeacherController::class, 'dashboard_page']);
//     Route::get('/review-document/', [TeacherController::class, 'review_page']);
//     Route::get('/review-document/{id}', [TeacherController::class, 'pdf_reader_page']);
//     Route::get('/account-setting/', [TeacherController::class, 'account_setting_page']);

//     // Route::post(); // Back End

// });

// Route::prefix('admin')->group(function (){
//     Route::get('/', [AdminController::class, 'dashboard_page']);
//     Route::get('/manage-users/', [AdminController::class, 'user_control_page']);
//     Route::get('/manage-users/recover-user', [AdminController::class, 'account_recovery']);
//     Route::get('/storage/', [AdminController::class, 'storage_page']);
//     Route::get('/account-settings/', [AdminController::class, 'account_setting_page']);
//     Route::get('/go/recovery', [RecoveryController::class, 'recovery_page']);

//     // Route::post(); // Back End

// });

// Route::prefix('environment')->group(function (){
//     Route::get('/', [Controller::class, 'pdf_reader']);


// });

