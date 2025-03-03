<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username = 'admin';
    public $password = '12345';
    public $remember = false;
    public $title = 'Admin Login';

    public function login()
    {
        $credentials = $this->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::guard('admin_staff_user')->attempt($credentials, $this->remember)) {
            $this->addError('username', 'Invalid username or password');
        }

        return redirect()->intended(route('show.dashboard.page'));
    }

    public function render()
    {
        if (Auth::guard('admin_staff_user')->check()) {
            $this->redirect(route('show.dashboard.page'));
        }

        return view('livewire.admin.login')->layoutData([
            'title' => $this->title
        ]);
    }
}
