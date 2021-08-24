<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\KodexAdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [KodexAdminController::class,'dashboard_1']);
Route::get('/index', [KodexAdminController::class,'dashboard_1']);
Route::get('/form-editor-summernote', [KodexAdminController::class,'form_editor_summernote']);
Route::get('/form-element', [KodexAdminController::class,'form_element']);
Route::get('/form-pickers', [KodexAdminController::class,'form_pickers']);
Route::get('/form-validation-jquery', [KodexAdminController::class,'form_validation_jquery']);
Route::get('/form-wizard', [KodexAdminController::class,'form_wizard']);
Route::get('/workout-statistic', [KodexAdminController::class,'workout_statistic']);
Route::get('/workoutplan',[KodexAdminController::class, 'workoutplan']);
Route::get('/distance-map', [KodexAdminController::class,'distance_map']);
Route::get('/food-menu', [KodexAdminController::class,'food_menu']);
Route::get('/personal-record', [KodexAdminController::class,'personal_record']);
Route::prefix('/reports')->group(function () {
       Route::get('/all-reports', [KodexAdminController::class,'reports']);
       Route::get('/add-report', [KodexAdminController::class,'addReport']);
       Route::post('/get-report-img',[KodexAdminController::class,'getReportImg']);
});


Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
