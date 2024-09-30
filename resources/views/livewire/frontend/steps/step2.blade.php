<div class="songs-holder text-center min-h-[60vh]">
    <select wire:change="selectSong($event.target.value)" id="song"
        class="p-3 w-3/4 text-center rounded-lg border bg-zinc-100">
        <option value="-1">בחר שיר מהרשימה</option>
        @foreach ($songList as $song)
            <option {{ session()->get('songId') == $song->id ? 'selected' : '' }} value="{{ $song->id }}">
                {{ $song->title }}</option>
        @endforeach
    </select>
    @if ($selectedSong > -1 && $songToPlay != '')
        <div x-show="{{ $selectedSong > -1 ? 'true' : 'false' }}" class="row py-10">
            <div class="player holder w-full flex justify-around">
                @if ($played == false)
                    <svg Wire:click="play('start')" class="animate-pulse hover:animate-none"
                        xmlns="http://www.w3.org/2000/svg" height="200" width="200"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#e830c0"
                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                    </svg>
                @else
                    <svg Wire:click="play('stop')"
                        class="hover:outline outline-4 outline-pink-700 rounded-full animate-pulse"
                        xmlns="http://www.w3.org/2000/svg" height="200" width="200"
                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ec4899"
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM192 160l128 0c17.7 0 32 14.3 32 32l0 128c0 17.7-14.3 32-32 32l-128 0c-17.7 0-32-14.3-32-32l0-128c0-17.7 14.3-32 32-32z" />
                    </svg>
                @endif
            </div>
        </div>
    @endif


    <audio id="media-player" controls class="hidden">
        <source src="{{ Storage::url('') . $songToPlay }}" type="audio/mpeg">
    </audio>
    @script
        <script>
            $wire.on('play', ($state) => {
                let player = document.getElementById('media-player');
                if ($state == 'start') {
                    player.load();
                    player.play();
                } else {
                    player.pause();
                }

            });
        </script>
    @endscript
</div>
