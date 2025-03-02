<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class CateringPackages extends Component
{
    public $title = 'Catering Packages';
    public function render()
    {
        return view('livewire.admin.catering-packages')
        ->layoutData([
            'title' => $this->title
        ]);
    }
}
