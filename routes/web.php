<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\SecondaryController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\AuthController;
use App\Models\CollegeTeam;
use App\Models\SecondaryTeam;
use App\Models\FacultyTeam;


// Public routes
Route::get('/', function () {
    // ✅ If already logged in as admin → redirect to dashboard
    if (session()->has('user')) {
        return redirect()->route('admin.manage');
    }

    $collegeTeams = CollegeTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();

    $secondaryTeams = SecondaryTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();

    $facultyTeams = FacultyTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();

    return view('index', compact('collegeTeams', 'secondaryTeams', 'facultyTeams'));
})->name('home');

Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');


Route::get('/logout', function () {
    session()->forget('user'); // clear the session
    return redirect()->route('home')->with('success', 'You have been logged out.');
})->name('logout');


// ✅ Protected admin routes
Route::middleware(['admin'])->group(function () {

    Route::get('/admin/manage', function () {
        $collegeTeams = CollegeTeam::orderByDesc('gold')
            ->orderByDesc('silver')
            ->orderByDesc('bronze')
            ->get();

        $secondaryTeams = SecondaryTeam::orderByDesc('gold')
            ->orderByDesc('silver')
            ->orderByDesc('bronze')
            ->get();

        $facultyTeams = FacultyTeam::orderByDesc('gold')
            ->orderByDesc('silver')
            ->orderByDesc('bronze')
            ->get();

        return view('admin.manage', compact('collegeTeams', 'secondaryTeams', 'facultyTeams'));
    })->name('admin.manage');

    // College routes
    Route::post('/admin/college-save-team', [CollegeController::class, 'store'])
        ->name('admin.collegeSaveTeam');
    Route::put('/admin/college-team/{id}', [CollegeController::class, 'update'])
        ->name('admin.collegeTeam.update');
    Route::delete('/admin/college-team/{id}', [CollegeController::class, 'destroy'])
        ->name('admin.collegeTeam.delete');

    // Secondary routes
    Route::post('/admin/secondary-save-team', [SecondaryController::class, 'store'])
        ->name('admin.secondarySaveTeam');
    Route::put('/admin/secondary-team/{id}', [SecondaryController::class, 'update'])
        ->name('admin.secondaryTeam.update');
    Route::delete('/admin/secondary-team/{id}', [SecondaryController::class, 'destroy'])
        ->name('admin.secondaryTeam.delete');

    // Faculty routes
    Route::post('/admin/faculty-save-team', [FacultyController::class, 'store'])
        ->name('admin.facultySaveTeam');
    Route::put('/admin/faculty-team/{id}', [FacultyController::class, 'update'])
        ->name('admin.facultyTeam.update');
    Route::delete('/admin/faculty-team/{id}', [FacultyController::class, 'destroy'])
        ->name('admin.facultyTeam.delete');
});
