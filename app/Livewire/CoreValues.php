<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CoreValues extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.core-values');
    }
}
