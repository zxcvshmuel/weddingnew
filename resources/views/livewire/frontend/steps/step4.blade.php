<div class="px-4" dir="rtl">
    <h2 class="text-2xl font-bold text-center">פרטי האירוע</h2>
    <form wire:submit.prevent="saveDetails">

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['hatan']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['hatan']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text" wire:change="getOrUpdateDetailsFromSession(true, 'hatan', $event.target.value)"
                    name="{{ $details['hatan']['value'] ?? '' }}" id="{{ $details['hatan']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
        placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['hatan']['value'] ?? '' }}">
                @error('details.hatan.value')
                    <span class="error text-red-400">{{ $details['hatan']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['hatanParents']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['hatanParents']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'hatanParents', $event.target.value)"
                    name="{{ $details['hatanParents']['value'] ?? '' }}"
                    id="{{ $details['hatanParents']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['hatanParents']['value'] ?? '' }}">
                @error('details.hatanParents.value')
                    <span class="error text-red-400">{{ $details['hatanParents']['error'] }}</span>
                @enderror
            </div>
        </div>


        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['hatanGrandparents']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['hatanGrandparents']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'hatanGrandparents', $event.target.value)"
                    name="{{ $details['hatanGrandparents']['value'] ?? '' }}"
                    id="{{ $details['hatanGrandparents']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['hatanGrandparents']['value'] ?? '' }}">
                @error('details.hatanGrandparents.value')
                    <span class="error text-red-400">{{ $details['hatanGrandparents']['error'] }}</span>
                @enderror
            </div>
        </div>



        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['kala']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['kala']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text" wire:change="getOrUpdateDetailsFromSession(true, 'kala', $event.target.value)"
                    name="{{ $details['kala']['value'] ?? '' }}" id="{{ $details['kala']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
        placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['kala']['value'] ?? '' }}">
                @error('details.kala.value')
                    <span class="error text-red-400">{{ $details['kala']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['kalaParents']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['kalaParents']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'kalaParents', $event.target.value)"
                    name="{{ $details['kalaParents']['value'] ?? '' }}"
                    id="{{ $details['kalaParents']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['kalaParents']['value'] ?? '' }}">
                @error('details.kalaParents.value')
                    <span class="error text-red-400">{{ $details['kalaParents']['error'] }}</span>
                @enderror
            </div>
        </div>


        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['kalaGrandparents']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['kalaGrandparents']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'kalaGrandparents', $event.target.value)"
                    name="{{ $details['kalaGrandparents']['value'] ?? '' }}"
                    id="{{ $details['kalaGrandparents']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['kalaGrandparents']['value'] ?? '' }}">
                @error('details.kalaGrandparents.value')
                    <span class="error text-red-400">{{ $details['kalaGrandparents']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['eventDate']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['eventDate']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="date" wire:change="updateDate($event.target.value)"
                    name="{{ $details['eventDate']['value'] ?? '' }}" id="{{ $details['eventDate']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
    placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['eventDate']['value'] ?? '' }}">
                @error('details.eventDate.value')
                    <span class="error text-red-400">{{ $details['eventDate']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['eventDateHeb']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['eventDateHeb']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input disabled type="text" name="{{ $details['eventDateHeb']['value'] ?? '' }}"
                    id="{{ $details['eventDateHeb']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['eventDateHeb']['value'] ?? '' }}">
                @error('details.eventDateHeb.value')
                    <span class="error text-red-400">{{ $details['eventDateHeb']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['eventTimeReception']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['eventTimeReception']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="time"
                    wire:change="getOrUpdateDetailsFromSession(true, 'eventTimeReception', $event.target.value)"
                    name="{{ $details['eventTimeReception']['value'] ?? '' }}"
                    id="{{ $details['eventTimeReception']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['eventTimeReception']['value'] ?? '' }}">
                @error('details.eventTimeReception.value')
                    <span class="error text-red-400">{{ $details['eventTimeReception']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['eventTimehupa']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['eventTimehupa']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="time"
                    wire:change="getOrUpdateDetailsFromSession(true, 'eventTimehupa', $event.target.value)"
                    name="{{ $details['eventTimehupa']['value'] ?? '' }}"
                    id="{{ $details['eventTimehupa']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['eventTimehupa']['value'] ?? '' }}">
                @error('details.eventTimehupa.value')
                    <span class="error text-red-400">{{ $details['eventTimehupa']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['invitationPhone']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['invitationPhone']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="tel"
                    wire:change="getOrUpdateDetailsFromSession(true, 'invitationPhone', $event.target.value)"
                    name="{{ $details['invitationPhone']['value'] ?? '' }}"
                    id="{{ $details['invitationPhone']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['invitationPhone']['value'] ?? '' }}">
                @error('details.invitationPhone.value')
                    <span class="error text-red-400">{{ $details['invitationPhone']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['invitationCongratsTop']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['invitationCongratsTop']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'invitationCongratsTop', $event.target.value)"
                    name="{{ $details['invitationCongratsTop']['value'] ?? '' }}"
                    id="{{ $details['invitationCongratsTop']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['invitationCongratsTop']['value'] ?? '' }}">
                @error('details.invitationCongratsTop.value')
                    <span class="error text-red-400">{{ $details['invitationCongratsTop']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['locationName']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['locationName']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'locationName', $event.target.value)"
                    name="{{ $details['locationName']['value'] ?? '' }}"
                    id="{{ $details['locationName']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['locationName']['value'] ?? '' }}">
                @error('details.locationName.value')
                    <span class="error text-red-400">{{ $details['locationName']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['locationAddress']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['locationAddress']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'locationAddress', $event.target.value)"
                    name="{{ $details['locationAddress']['value'] ?? '' }}"
                    id="{{ $details['locationAddress']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['locationAddress']['value'] ?? '' }}">
                @error('details.locationAddress.value')
                    <span class="error text-red-400">{{ $details['locationAddress']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <label for="{{ $details['invitationCongratsBottom']['uid'] ?? '' }}"
                class="block text-sm font-medium leading-6 text-gray-900">{{ $details['invitationCongratsBottom']['title'] ?? '' }}</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <input type="text"
                    wire:change="getOrUpdateDetailsFromSession(true, 'invitationCongratsBottom', $event.target.value)"
                    name="{{ $details['invitationCongratsBottom']['value'] ?? '' }}"
                    id="{{ $details['invitationCongratsBottom']['uid'] ?? '' }}"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 
            placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    value="{{ $details['invitationCongratsBottom']['value'] ?? '' }}">
                @error('details.invitationCongratsBottom.value')
                    <span class="error text-red-400">{{ $details['invitationCongratsBottom']['error'] }}</span>
                @enderror
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <div class="mt-6 space-y-6">
                <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input type="checkbox"
                            wire:change="getOrUpdateDetailsFromSession(true, 'allowNoGluten', $event.target.checked)"
                            name="{{ $details['allowNoGluten']['value'] ?? '' }}"
                            id="{{ $details['allowNoGluten']['uid'] ?? '' }}"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                            {{ $details['allowNoGluten']['value'] == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="text-sm leading-6">
                        <label for="{{ $details['allowNoGluten']['uid'] ?? '' }}"
                            class="font-medium text-gray-900">{{ $details['allowNoGluten']['title'] ?? '' }}</label>
                        <p class="text-gray-500">{{ $details['allowNoGluten']['description'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- form field --}}
        <div class="py-4">
            <div class="mt-6 space-y-6">
                <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input type="checkbox"
                            wire:change="getOrUpdateDetailsFromSession(true, 'allowChildren', $event.target.checked)"
                            name="{{ $details['allowChildren']['value'] ?? '' }}"
                            id="{{ $details['allowChildren']['uid'] ?? '' }}"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                            {{ $details['allowChildren']['value'] == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="text-sm leading-6">
                        <label for="{{ $details['allowChildren']['uid'] ?? '' }}"
                            class="font-medium text-gray-900">{{ $details['allowChildren']['title'] ?? '' }}</label>
                        <p class="text-gray-500">{{ $details['allowChildren']['description'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- form field --}}
        <div class="py-4">
            <div class="mt-6 space-y-6">
                <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input type="checkbox"
                            wire:change="getOrUpdateDetailsFromSession(true, 'allowVegan', $event.target.checked)"
                            name="{{ $details['allowVegan']['value'] ?? '' }}"
                            id="{{ $details['allowVegan']['uid'] ?? '' }}"
                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                            {{ $details['allowVegan']['value'] == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="text-sm leading-6">
                        <label for="{{ $details['allowVegan']['uid'] ?? '' }}"
                            class="font-medium text-gray-900">{{ $details['allowVegan']['title'] ?? '' }}</label>
                        <p class="text-gray-500">{{ $details['allowVegan']['description'] ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>





        <div class="text-center">
            <button type="submit" class="px-4 py-2 hover:bg-pink-700 bg-pink-500 text-white rounded-lg">סיום</button>
        </div>
    </form>
</div>
