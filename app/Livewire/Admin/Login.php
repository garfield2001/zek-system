<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username = 'admin';
    public $password = '12345';
    public $remember = '';
    public $title = 'Admin Login';

    public function login()
    {
        $credentials = $this->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin_staff_user')->attempt($credentials, $this->remember)) {
            return redirect()->intended('/dashboard_test');
        } else {
            $this->addError('username', 'Invalid username or password');
        }
    }

    public function render()
    {
        if (Auth::guard('admin_staff_user')->check()) {
            $this->redirect('/dashboard_test');
        }
        return view('livewire.admin.login')->layoutData([
            'title' => $this->title
        ]);
    }
}
