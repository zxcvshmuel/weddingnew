<div class="grid grid-cols-2 gap-4 px-3 effects-holder">
    @foreach ($effects as $effect)
        <div Wire:click="selectEffect({{ $effect->id }})"
            class="overflow-hidden relative bg-gray-200 rounded-lg  border-solid img-card  border-2 {{ $selectedEffect == $effect->id ? 'border-pink-500' : 'border-gray-300' }}">
            <img class="" src="{{ Storage::url('') . $selectedFraimeToShow }}"
                class="object-cover w-full h-64 rounded-t-lg effect effect-1" alt="Base image" />
            <img src="{{ Storage::url('') . $effect->file_path }}"
                class="object-cover absolute top-0 left-0 w-full h-64 rounded-t-lg mask-image" alt="GIF mask" />
        </div>
    @endforeach
</div>
