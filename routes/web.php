<?php

use App\Livewire\Admin\AddOns;
use App\Livewire\Admin\CateringPackages;
use App\Livewire\Admin\ContactMe;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\DashboardTest;
use App\Livewire\Admin\Dishes;
use App\Livewire\Admin\Index;
use App\Livewire\Admin\Login;
use App\Livewire\Admin\MealCategories;
use App\Livewire\Admin\Reports;
use App\Livewire\Admin\Reservations;
use App\Livewire\Admin\Settings;
use App\Livewire\Admin\Staffs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', 'admin');
Route::redirect('admin', 'admin_login');


Route::get('/admin_login', Login::class)->name('admin-login.page');
Route::get('login', [Login::class, 'login'])->name('login.user');

Route::middleware(['auth:admin_staff_user'])->group(function () {
    Route::get('/contact_me', ContactMe::class)->name('show.contact-me.page');

    Route::get('/dashboard', Dashboard::class)->name('show.dashboard.page');
    Route::get('/catering_packages', CateringPackages::class)->name('show.catering-packages.page');
    Route::get('/meal_categories', MealCategories::class)->name('show.meal-categories.page');
    Route::get('/add_ons', AddOns::class)->name('show.add-ons.page');
    Route::get('/dishes', Dishes::class)->name('show.dishes.page');
    Route::get('/reservations', Reservations::class)->name('show.reservations.page');
    Route::get('/staffs', Staffs::class)->name('show.staffs.page');
    Route::get('/reports', Reports::class)->name('show.reports.page');
    Route::get('/system_settings', Settings::class)->name('show.system-settings.page');

    Route::get('/logout', [Dashboard::class, 'logout'])->name('logout.user');

    /* Testing Purposes */
    Route::get('/dashboard_test', DashboardTest::class);
});

Route::redirect('login', 'admin')->name('login');
