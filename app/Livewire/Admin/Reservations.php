<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Reservations extends Component
{
    public $title;
    public function mount()
    {
        $this->title = 'Reservations';
    }
    public function render()
    {
        return view('livewire.admin.reservations')->layoutData([
            'title' => $this->title
        ]);
    }
}
