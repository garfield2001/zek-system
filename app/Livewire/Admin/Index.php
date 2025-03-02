<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $title = 'Dashboard';
    protected $listeners = [
        'logoutUser' => 'logout',
    ];

    public function render()
    {
        return view('livewire.admin.index')->layoutData([
            'title' => $this->title
        ])->with([
            'user' => Auth::guard('admin_staff_user')->user()
        ]);
    }

    public function updateTitle($title)
    {
        $this->title = $title;
    }


}
