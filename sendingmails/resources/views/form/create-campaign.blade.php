<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Campaign') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('campaigncreate') }}" class="mt-6 space-y-6">
        @csrf
        {{-- <div>
            <x-input-label for="sendto" :value="__('Send To')" />
            <x-text-input id="sendto" name="sendto" type="text" class="mt-1 block w-full" :value="old('sendto')" required autofocus autocomplete="sendto" />
            <x-input-error :messages="$errors->get('sendto')" class="mt-2" />
        </div> --}}
        <form class="form-floating">
            <x-input-label for="sendto" :value="__('Send To')" />
            <input type="email" class="form-control" disabled name="sendto" id="sendto-input" placeholder="name@example.com" required autofocus autocomplete="sendto" value="{{ old('sendto') }}">
            <label for="floatingInputValue">Input with value</label>
            <x-input-error :messages="$errors->get('sendto')" class="mt-2" />
        </form>
        
        <select class="form-select form-select-lg mb-3" aria-label="Large select example" id="contract-select">
            @foreach ($contracts as $contract)
                <option id="contract-selected" value="{{ $contract->email }}">{{ $contract->email }}</option>
            @endforeach
        </select>
          
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Subject and Content') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>
        <div class="mt-4">
            <x-input-label for="name" :value="__('From Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-2">
            <x-input-label for="email" :value="__('From Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="subject" :value="__('Subject')" />
            <x-text-input id="subject" name="subject" type="text" class="mt-1 block w-full" :value="old('subject')" required autofocus autocomplete="subject" />
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="content" :value="__('Privew Text')" />
            <x-text-input id="content" name="content" type="text" class="mt-1 block w-full" :value="old('content')" required autofocus autocomplete="content" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>
        

        <div class="flex items-center gap-4 mt-3">
            <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'campaign-created')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}</p>
        @endif
        </div>
    </form>
</section>
<script>
    document.getElementById('contract-select').addEventListener('change', function() {
        var selectedOptions = Array.from(this.selectedOptions);
        var selectedValues = selectedOptions.map(option => option.value);
        document.getElementById('sendto-input').value = selectedValues.join(', ');
    });
</script>
