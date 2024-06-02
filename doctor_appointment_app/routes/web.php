<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthorAccessRole;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DlistController;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserprofileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Doctor;
use App\Http\Middleware\Patient;
use App\Models\dlist;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});


//using admin middleware
Route::middleware(Admin::class)->group(function () {
       //Departmentlist(tushar)
Route::resource('/dlist',DlistController::class)->names('dlist');
});
//using patient middleware
Route::middleware(Patient::class)->group(function () {
//book appointment: patient book korbe appointment
Route::get('/bookappointment',[AppointmentController::class, 'index'])->name('appointment.index')->middleware('auth'); 
   
});
//using doctor middleware
Route::middleware(Doctor::class)->group(function () {
   
});

//patient profile
Route::resource('/patient', PatientProfileController::class)->middleware('auth')
->parameters(['patient' => 'patient_profile']);

//departments
Route::resource('/departments', DepartmentController::class)->middleware('auth');



//Find doctor
Route::get('/finddoctor',[DoctorProfileController::class, 'index'])->name('doctor.index')->middleware('auth');

//user
Route::resource('/user', UserController::class)->only(['index', 'store', 'show', 'create', 'edit', 'update', 'destroy'])->names('user');


// user profile
Route::resource('/myprofile', MyprofileController::class)->only(['index', 'store', 'show', 'create', 'edit', 'update', 'destroy'])->names('myprofile');




// Admin dashboard
Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin')  {
        return view('admin.index');
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

