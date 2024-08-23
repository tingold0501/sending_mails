<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Contract') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('contract_store') }}" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
       
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name')" required autofocus autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="contract_statue_id" :value="__('Contract Status')" />
            <select class="js-example-basic-single mt-1 block w-full" name="contract_statue_id"  required autofocus autocomplete="contract_statue_id">
                @foreach ($contract_statues as $contract_statue)
                    <option  value="{{ $contract_statue->id }}" {{ old('contract_statue_id') == $contract_statue->id ? 'selected' : '' }}>
                        {{ $contract_statue->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('contract_statue_id')" class="mt-2" />
        </div>
        
        <div class="flex items-center gap-4">
            <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

