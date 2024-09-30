<div class="main">
    <section class="py-4 bg-white">
        <div class="flex justify-around row-auto flex-row-reverse">
            @foreach ($stepsList as $key => $step)
                <div class="text-center">
                    <div
                        class="flex justify-center items-center mx-auto w-12 h-12 {{ $key == $currentStep ? 'text-white bg-pink-500' : 'text-black bg-gray-200' }}  rounded-full">
                        <span class="text-xl font-bold">
                            {{ $key }}
                        </span>
                    </div>
                    <p class="mt-2">
                        {{ $step }}
                    </p>
                </div>
            @endforeach
        </div>
    </section>
    <section class="py-4 bg-white">

        @livewire('frontend.steps.step' . $currentStep, [], key('step-component-' . $currentStep))

    </section>

    @if ($allowPrev || $allowNext)
        <section class="py-4 bg-white bg-opacity-75 fixed bottom-0 w-full">
            <div class="flex flex-row-reverse justify-around">
                @if ($allowPrev)
                    <button wire:click="changeStep({{ $currentStep - 1 }})"
                        class="px-4 py-2 hover:bg-pink-700 bg-pink-500 text-white rounded-lg">
                        חזור
                    </button>
                @endif
                @if ($allowNext)
                    <button wire:click="changeStep({{ $currentStep + 1 }})"
                        class="px-4 py-2 hover:bg-pink-700 bg-pink-500 text-white rounded-lg">
                        המשך
                    </button>
                @endif
            </div>
        </section>
    @endif
</div>
