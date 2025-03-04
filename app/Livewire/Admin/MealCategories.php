<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class MealCategories extends Component
{

    public $title;

    public function mount()
    {
        $this->title = 'Meal Categories';
    }

    public function render()
    {
        return view('livewire.admin.meal-categories')->layoutData([
            'title' => $this->title
        ]);
    }
}
