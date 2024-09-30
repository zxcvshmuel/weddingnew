<?php

namespace App\Livewire\Frontend;

use App\Models\Effect;
use App\Models\Frame;
use Livewire\Component;
use App\Models\Invitation;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class Preview extends Component
{

    public $invitationId;

    public $invitation;

    public $mainTitle = 'תצוגה מקדימה';

    public $svg;

    public $textElements;

    public $details;

    public $song;

    public $effect;

    public function mount($invitation_id)
    {
        $this->invitationId = $invitation_id;

        $this->invitation = Invitation::find($invitation_id);

        $frame = $this->invitation->frame_id;

        $frame = Frame::find($frame);

        $this->svg = $frame->svg_path;

        $this->textElements = $frame->textElements;

        $this->details = $this->invitation->details;

        $this->song = Song::find($this->invitation->song_id);

        $this->effect = Effect::find($this->invitation->effect_id);

        if (Storage::disk('public')->exists($this->svg)) {
            $filePath = Storage::disk('public')->path($this->svg);
            // echo $filePath;
            $file = file_get_contents($filePath);

            foreach ($this->details as $key => $value) {
                if ($this->textElements->where('uid', $value['uid'] != null)) {
                    $this->details[$key]['original'] = $this->textElements->where('uid', $value['uid'])->first()->default_text ?? '';
                } else {
                    $this->details[$key]['original'] = '';
                }
            }

            foreach ($this->details as $key => $value) {
                if (strpos($file, $value['original']) !== false) {
                    $file = str_replace($value['original'], $value['value'], $file);
                }
            }

            $file = str_replace('SEPTEMBER 25 2024', 'SEPTEMBER 25 2025', $file);
        }





        // dd($this->invitation);

        $saved = Storage::disk('public')->put('1.svg', $file);

        $this->svg = '1.svg';
    }


    public function render()
    {
        return view('livewire.frontend.preview')
            ->layout('layouts.frontendPreview');
    }
}
