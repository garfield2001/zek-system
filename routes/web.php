<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', 'admin');
Route::redirect('admin', 'admin_login');


Route::get('/admin_login', Login::class)->name('admin-login.page');

Route::middleware(['auth:admin_staff_user'])->group(function () {
    Route::get('/dashboard', Dashboard::class);
});

Route::redirect('login', 'admin')->name('login');
