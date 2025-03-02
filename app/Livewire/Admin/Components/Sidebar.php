<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{

    public function render()
    {
        return view('livewire.admin.components.sidebar');
    }



    public function logout()
    {
        $this->dispatch('logoutUser');
    }
}
