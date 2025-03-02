<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ContactMe extends Component
{
    public $title = 'Contact Me';


    /** @method layoutData(array $data) */
    public function render()
    {
        return view('livewire.admin.contact-me')->layoutData([
            'title' => $this->title
        ]);
    }
}
