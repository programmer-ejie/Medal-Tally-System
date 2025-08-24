<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\SecondaryController;
use App\Models\CollegeTeam;
use App\Models\SecondaryTeam;

Route::get('/', function () {
    $collegeTeams = CollegeTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();
    $secondaryTeams = SecondaryTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();
    return view('index', compact('collegeTeams', 'secondaryTeams'));
})->name('home');


// College routes
Route::get('/admin/manage', function () {
    $collegeTeams = CollegeTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();
    $secondaryTeams = SecondaryTeam::orderByDesc('gold')
        ->orderByDesc('silver')
        ->orderByDesc('bronze')
        ->get();
    return view('admin.manage', compact('collegeTeams', 'secondaryTeams'));
})->name('admin.manage');

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