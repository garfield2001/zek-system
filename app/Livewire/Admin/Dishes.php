<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dishes extends Component
{
    public $title;

    public function mount()
    {
        $this->title = 'Dishes';
    }

    public function render()
    {
        return view('livewire.admin.dishes')->layoutData([
            'title' => $this->title
        ]);
    }
}
