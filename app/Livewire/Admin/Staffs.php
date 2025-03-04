<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Staffs extends Component
{
    public $title;

    public function mount()
    {
        $this->title = 'Staffs';
    }
    public function render()
    {
        return view('livewire.admin.staffs')->layoutData([
            'title' => $this->title
        ]);
    }
}
