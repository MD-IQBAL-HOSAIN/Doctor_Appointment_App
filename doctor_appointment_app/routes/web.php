<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthorAccessRole;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/finddoctor',[DoctorProfileController::class, 'index'])->name('doctor.index');
Route::get('/bookappointment',[AppointmentController::class, 'index'])->name('appointment.index');

// Route::middleware(AuthorAccessRole::class)->group(function () { 

Route::get('/user',[UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/show',[UserController::class, 'show'])->name('user.show');
Route::get('/user/create',[UserController::class, 'create'])->name('user.create')->name('user.create');
Route::get('/user/destroy',[UserController::class, 'destroy'])->name('user.destroy');
// ...
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
// ...
// });






Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin')  {
        return view('admindashboard');
    } else {
        return redirect('/');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

