<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.manage');
});
Route::get('/admin/manage', function () {
    return view('admin.manage');
})->name('admin.manage');