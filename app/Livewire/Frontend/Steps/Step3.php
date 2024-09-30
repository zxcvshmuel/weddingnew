<?php

namespace App\Livewire\Frontend\Steps;

use App\Models\Effect;
use App\Models\Frame;
use Livewire\Component;

class Step3 extends Component
{

    public $effects;

    public $selectedEffect;

    public $selectedFraimeToShow;

    public function mount()
    {
        if (!session()->has('frameId') || session()->get('frameId') == -1) {
            $this->dispatch('changeStep', 1);
        } else if (!session()->has('songId') || session()->get('songId') == -1) {
            $this->dispatch('changeStep', 2);
        }

        $this->effects = Effect::all();
        $this->selectedFraimeToShow = Frame::find(session()->get('frameId'))->thumbnail_path;
        if (session()->has('effectId')) {
            $this->selectedEffect = session()->get('effectId');
            $this->updateNextPrev();
        } else {
            session()->put('effectId', -1);
            $this->selectedEffect = -1;
        }
    }

    public function selectEffect($effectId)
    {
        if ($this->selectedEffect == $effectId) {
            $this->selectedEffect = -1;
            session()->put('effectId', -1);
        } else {
            $this->selectedEffect = $effectId;
            session()->put('effectId', $effectId);
        }

        $this->updateNextPrev();
    }

    public function updateNextPrev()
    {
        if ($this->selectedEffect == -1) {
            $this->dispatch('selectedEffectUpdate', next: false, prev: true);
        } else {
            $this->dispatch('selectedEffectUpdate', next: true, prev: true);
        }
    }



    public function render()
    {
        return view('livewire.frontend.steps.step3');
    }
}
