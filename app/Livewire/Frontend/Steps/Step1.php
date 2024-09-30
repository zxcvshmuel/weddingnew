<?php

namespace App\Livewire\Frontend\Steps;

use App\Models\Frame;
use Livewire\Component;

class Step1 extends Component
{
    public $frames;

    public $selectedFrame;

    public function mount()
    {
        $this->frames = Frame::all();
        if (session()->has('frameId')) {
            $this->selectedFrame = session()->get('frameId');
        } else {
            session()->put('frameId', -1);
            $this->selectedFrame = -1;
        }

        $this->updateNextPrev();
    }

    public function selectFrame($frameId)
    {
        if ($this->selectedFrame == $frameId) {
            $this->selectedFrame = -1;
            session()->put('frameId', -1);
        } else {
            $this->selectedFrame = $frameId;
            session()->put('frameId', $frameId);
        }
        $this->updateNextPrev();
    }

    public function updateNextPrev()
    {
        if ($this->selectedFrame == -1) {
            $this->dispatch('selectedFrameUpdate', next: false, prev: false);
        } else {
            $this->dispatch('selectedFrameUpdate', next: true, prev: false);
        }
    }


    public function render()
    {
        return view('livewire.frontend.steps.step1');
    }
}
