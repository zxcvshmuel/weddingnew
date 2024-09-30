<div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-3 frames-holder">
@foreach ($frames as $frame)
<div Wire:click="selectFrame({{ $frame->id }})"  class="bg-gray-200 rounded-lg border-2 border-solid img-card {{ $selectedFrame == $frame->id ? 'border-pink-500' : 'border-gray-300' }}">
    <img id="{{ $frame->id }}" class="object-cover w-full h-64 rounded-t-lg"
        src="{{ Storage::url('/') . $frame->thumbnail_path }}" />
    {{-- <div class="p-4"> --}}
        {{-- <h3 class="text-xl font-bold text-center"> --}}
            {{-- {{ $frame->name }} --}}
        {{-- </h3> --}}
        {{-- <p class="mt-2 text-center"> --}}
            {{-- {{ $frame->description }} --}}
        {{-- </p> --}}
    {{-- </div> --}}
</div>
@endforeach
</div>