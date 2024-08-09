<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Contract Information') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's contract information and email address.") }}
        </p>
    </header>
    <form method="post" action="{{ route('contract.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $contract->email)" required autofocus autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input  id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $contract->first_name)" required autocomplete="first_name" />
            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
        </div>
        <div>
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $contract->last_name)" required autocomplete="last_name" />
            <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
