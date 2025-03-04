<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Reports extends Component
{
    public $title;

    public function mount()
    {
        $this->title = 'Reports';
    }
    public function render()
    {
        return view('livewire.admin.reports')->layoutData([
            'title' => $this->title
        ]);
    }
}
