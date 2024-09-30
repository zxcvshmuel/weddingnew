<div>
    <section class="py-8 mt-2 text-center bg-pink-200">
        <h2 class="text-3xl font-bold">
            {{ $mainTitle ?? 'קטלוג' }}
        </h2>
    </section>

    <section>
        <div class="container mx-auto relative inline-block">
            <img src="{{ Storage::url('') . $svg }}" alt="" class="block">
            <img src="{{ Storage::url('') . $effect->file_path }}" alt=""
                class="absolute top-0 left-0 w-100 h-100">
        </div>
    </section>
    <section class="py-4">
        <div class="container mx-auto">
            <p class="text-2xl text-center w-80 mx-auto preview-subtitle">
                {{ $details['invitationCongratsBottom']['value'] ?? $details['invitationCongratsBottom']['original'] }}
            </p>

            <div class="flex justify-center mt-4 text-2xl font-bold">
                {{ $details['eventDateHeb']['value'] }}
            </div>
            <div class="flex justify-center mt-1 text-2xl font-bold">

                {{ $details['eventDate']['value'] }}
            </div>

        </div>
        <div class="container mx-auto">
            <div class="grid-cols-2">
                <div class="flex justify-around py-2">
                    <div class="flex flex-col justify-center text-center">
                        <span class="text-xl">שעת החופה</span>
                        <span class="text-2xl font-bold">{{ $details['eventTimehupa']['value'] }}</span>
                    </div>
                    <div class="flex flex-col justify-center text-center">
                        <span class="text-xl">קבלת פנים</span>
                        <span class="text-2xl font-bold">{{ $details['eventTimeReception']['value'] }}</span>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container mx-auto">
            <div class="flex justify-center mt-4 text-2xl ">
                {{ $details['locationName']['value'] }}
            </div>
            <div class="flex justify-center mt-1 text-2xl ">
                {{ $details['locationAddress']['value'] }}
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="grid-cols-2">
            <div class="flex justify-around py-2">
                @if ($details['hatanParents']['value'])
                    <div class="flex flex-col justify-center text-center">
                        <span class="text-xl">הורי החתן</span>
                        <span class="text-2xl font-bold">{{ $details['hatanParents']['value'] }}</span>
                    </div>
                @endif
                @if ($details['kalaParents']['value'])
                <div class="flex flex-col justify-center text-center">
                    <span class="text-xl">הורי הכלה</span>
                    <span class="text-2xl font-bold">{{ $details['kalaParents']['value'] }}</span>
                </div>
                @endif  
            </div>
            <div class="flex justify-around py-2">
                @if ($details['hatanGrandparents']['value'])
                    <div class="flex flex-col justify-center text-center">
                        <span class="text-xl">סבי החתן</span>
                        <span class="text-2xl font-bold">{{ $details['hatanGrandparents']['value'] }}</span>
                    </div>
                @endif
                @if ($details['kalaGrandparents']['value'])
                <div class="flex flex-col justify-center text-center">
                    <span class="text-xl">סבי הכלה</span>
                    <span class="text-2xl font-bold">{{ $details['kalaGrandparents']['value'] }}</span>
                </div>
                @endif  
            </div>
            <div class="flex justify-center">
            </div>
        </div>
</div>
