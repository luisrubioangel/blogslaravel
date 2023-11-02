<?php

namespace App\Livewire;

use App\Models\Catergory;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $categories = Catergory::all();
        return view('livewire.navigation', compact('categories'));
    }
}
