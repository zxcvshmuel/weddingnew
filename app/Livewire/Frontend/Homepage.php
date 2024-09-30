<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.frontend.homepage')
            ->layout('layouts.frontend');
    }
}
