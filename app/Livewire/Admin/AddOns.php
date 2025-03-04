<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AddOns extends Component
{
    public $title;

    public function mount()
    {
        $this->title = 'Add Ons';
    }
    public function render()
    {
        return view('livewire.admin.add-ons')->layoutData([
            'title' => $this->title
        ]);
    }
}
