<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportRedirects\Redirector;

class Dashboard extends Component
{
    public $title = "Dashboard";
    public function render()
    {
        return view('livewire.admin.dashboard')->layoutData([
            'title' => $this->title
        ]);
    }

    public function logout()
    {
        Auth::guard('admin_staff_user')->logout();
        session()->flush();
        session()->regenerateToken();

        return redirect()->route('admin-login.page');
    }
}
