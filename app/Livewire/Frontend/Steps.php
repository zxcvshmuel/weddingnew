<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Session;

class Steps extends Component
{

    public $currentStep;

    public $allowNext = false;

    public $allowPrev = false;

    public $stepsList = [
        1 => 'בחרו תבנית',
        2 => 'בחרו שיר',
        3 => 'בחרו אפקט',
        4 => 'מלאו פרטים',
    ];

    public function mount()
    {
        if (Session::has('currentStep')) {
            $this->currentStep = Session::get('currentStep');
        } else {
            $this->currentStep = 1;
            Session::put('currentStep', $this->currentStep);
        }
    }

    #[On('selectedFrameUpdate')]
    public function selectFrameUpdate($next, $prev)
    {
        $this->allowNext = $next;
        $this->allowPrev = $prev;
    }

    #[On('selectedSongUpdate')]
    public function selectSongUpdate($next, $prev)
    {
        $this->allowNext = $next;
        $this->allowPrev = $prev;
    }

    #[On('selectedEffectUpdate')]
    public function selectEffectUpdate($next, $prev)
    {
        $this->allowNext = $next;
        $this->allowPrev = $prev;
    }


    #[On('changeStep')]
    public function changeStep($next)
    {
        $this->currentStep = $next;
        Session::put('currentStep', $this->currentStep);
    }

    public function render()
    {
        return view('livewire.frontend.steps')
            ->with('currentStep', $this->currentStep);
    }
}
