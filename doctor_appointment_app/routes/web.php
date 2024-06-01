<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthorAccessRole;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprofileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route::get('/user/profile',function(){
//     return view('user.profile');
//     });
//patient profile
Route::get('/patient', [PatientProfileController::class, 'index'])->name('patient.index')->middleware('auth');
Route::get('/patient/profile', [PatientProfileController::class, 'patient'])->name('patient.patient')->middleware('auth');
Route::get('/patient/create', [PatientProfileController::class, 'create'])->name('patient.create')->middleware('auth');
Route::post('/patient', [PatientProfileController::class, 'store'])->name('patient.store')->middleware('auth');
Route::get('/patient/edit/{patient_profile}', [PatientProfileController::class, 'edit'])->name('patient.edit')->middleware('auth');
Route::put('/patient/update/{patient_profile}', [PatientProfileController::class, 'update'])->name('patient.update')->middleware('auth');
Route::delete('/patient/destroy/{patient_profile}', [PatientProfileController::class, 'destroy'])->name('patient.destroy')->middleware('auth');




//departments
Route::resource('/departments', DepartmentController::class);
/* Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index')->middleware('auth');
Route::get('/departments/show', [DepartmentController::class, 'show'])->name('departments.show');
Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::get('/departments/edit/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/update/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/destroy/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy'); */


//Find doctor
Route::get('/finddoctor',[DoctorProfileController::class, 'index'])->name('doctor.index')->middleware('auth');
//book appointment
Route::get('/bookappointment',[AppointmentController::class, 'index'])->name('appointment.index')->middleware('auth');


// Route::middleware(AuthorAccessRole::class)->group(function () { 
    //users
Route::get('/user',[UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/show',[UserController::class, 'show'])->name('user.show');
Route::get('/user/create',[UserController::class, 'create'])->name('user.create')->name('user.create');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/user/update/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// });

// Admin dashboard
Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin')  {
        return view('admindashboard');
    } else {
        return redirect('/');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

