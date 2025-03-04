<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username;
    public $password;
    public $remember;
    public $title;

    public function mount()
    {
        $this->username = 'admin';
        $this->password = '12345';
        $this->remember = false;
        $this->title = 'Admin Login';
    }

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
