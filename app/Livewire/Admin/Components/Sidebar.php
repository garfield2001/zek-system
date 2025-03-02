<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    public $currentRoute;

    public function mount()
    {
        $this->currentRoute = Route::currentRouteName();
    }

    public function cateringPackages()
    {
        return redirect()->route('show.catering-packages.page');
    }

    public function dashboard()
    {
        return redirect()->route('show.dashboard.page');
    }

    public function logout()
    {
        $this->dispatch('logoutUser');
    }
}
