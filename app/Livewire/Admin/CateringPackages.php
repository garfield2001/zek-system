<?php

namespace App\Livewire\Admin;

use App\Models\Admin\CateringPackages as AdminCateringPackages;
use Livewire\Component;
use Livewire\WithPagination;

class CateringPackages extends Component
{
    use WithPagination;
    public $title;
    public $search = '';

    public function mount()
    {
        $this->title = 'Catering Packages';
    }
    public function render()
    {

        return view('livewire.admin.catering-packages')
            ->layoutData([
                'title' => $this->title
            ])->with([
                'catering_packages' => AdminCateringPackages::all(),
            ]);
    }
}
