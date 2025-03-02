<?php

use App\Livewire\Admin\CateringPackages;
use App\Livewire\Admin\ContactMe;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\DashboardTest;
use App\Livewire\Admin\Index;
use App\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', 'admin');
Route::redirect('admin', 'admin_login');


Route::get('/admin_login', Login::class)->name('admin-login.page');
Route::get('login', [Login::class, 'login'])->name('login.user');

Route::middleware(['auth:admin_staff_user'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('show.dashboard.page');
    Route::get('/contact-me', ContactMe::class)->name('show.contact-me.page');
    Route::get('/catering_packages', CateringPackages::class)->name('show.catering-packages.page');

    Route::get('/logout', [Dashboard::class, 'logout'])->name('logout.user');

    /* Testing Purposes */
    Route::get('/dashboard_test', DashboardTest::class);
});

Route::redirect('login', 'admin')->name('login');
