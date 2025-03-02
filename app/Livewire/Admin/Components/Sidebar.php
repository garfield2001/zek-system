<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.admin.components.sidebar')->layout('components.layouts.app')->with([
            'user' => Auth::guard('admin_staff_user')->user()
        ]);
    }
}
