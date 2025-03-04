<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Settings extends Component
{
    public $title;

    public function mount()
    {
        $this->title = 'System Settings';
    }
    public function render()
    {
        return view('livewire.admin.settings')->layoutData([
            'title' => $this->title
        ]);
    }
}
