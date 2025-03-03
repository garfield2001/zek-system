<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.admin.components.navbar')->with([
            'user' => Auth::guard('admin_staff_user')->user()
        ]);
    }

    public function logout()
    {
        $this->dispatch('logoutUser');
    }
}
