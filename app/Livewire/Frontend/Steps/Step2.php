<?php

namespace App\Livewire\Frontend\Steps;

use App\Models\Song;
use Livewire\Component;
use Livewire\Volt\Compilers\Mount;

class Step2 extends Component
{

    public $songList;

    public $selectedSong;

    public $songToPlay;

    public $played = false;


    public function mount()
    {
        if (!session()->has('frameId') || session()->get('frameId') == -1) {
            $this->dispatch('changeStep', 1);
        }
        
        $this->songList = Song::all();
        if (session()->has('songId') && session()->get('songId') != -1) {
            $this->selectedSong = session()->get('songId');
            $this->songToPlay = Song::find($this->selectedSong)->file_path ?? '';
            $this->selectSong($this->selectedSong);
        } else {
            session()->put('songId', -1);
            $this->selectedSong = -1;
            $this->songToPlay = '';
        }

        $this->updateNextPrev();
    }


    public function selectSong($songId)
    {
        $song = Song::find($songId);
        if ($song) {
            $this->selectedSong = $songId;
            session()->put('songId', $songId);
            $this->songToPlay = Song::find($songId)->file_path ?? '';
        }else{
            $this->selectedSong = -1;
            session()->put('songId', -1);
            $this->songToPlay = '';
        }

        $this->updateNextPrev();
    }

    public function updateNextPrev()
    {
        if ($this->selectedSong == -1) {
            $this->dispatch('selectedSongUpdate', next: false, prev: true);
        } else {
            $this->dispatch('selectedSongUpdate', next: true, prev: true);
        }
    }

    public function play($state)
    {
        if ($state == 'start') {
            $this->played = true;
        } else {
            $this->played = false;
        }
        $this->dispatch('play', $state);
    }



    public function render()
    {
        return view('livewire.frontend.steps.step2');
    }
}
