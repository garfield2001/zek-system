<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardTest extends Component
{
    public $title = 'Dashboard Test';
    public function render()
    {
        return view('livewire.admin.dashboard-test')->layoutData([
            'title' => $this->title
        ])->with([
            'user' => Auth::guard('admin_staff_user')->user()
        ]);
    }
}
