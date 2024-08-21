<section class="w-[100vh] ">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Campaign') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>
    <form method="post" action="{{ route('campaigncreate') }}" class="mt-6 w-full">
        @csrf
        <x-input-label class="mb-3" for="sendto" :value="__('Send To')" />
        <select id="multiple-select" name="sendto[]"  multiple="multiple"  class="js-example-basic-multiple form-select form-select-lg mb-3 h-[100px] rounded-xl" aria-label="Large select example">
            @foreach ($contracts as $contract)
                <option class="rounded-lg" value="{{ $contract->email }}">{{ $contract->email }}</option>
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
            <x-text-input id="name" name="from_name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('from_name')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="email" :value="__('From Email')" />
            <x-text-input id="email" name="from_email" type="email" class="mt-1 block w-full" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="subject" :value="__('Subject')" />
            <x-text-input id="subject" name="subject" type="text" class="mt-1 block w-full" :value="old('subject')" required autofocus autocomplete="subject" />
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        </div>
        <div class="mt-2">
            <x-input-label for="content" :value="__('Privew Text')" />
            <x-text-input id="content" name="text" type="text" class="mt-1 block w-full" :value="old('content')" required autofocus autocomplete="content" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>
       
        <section class="flex flex-row mt-4 sm:flex-row items-center justify-center gap-4">
            <div  class=" cursor-pointer hover:bg-gray-100  max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://i.pinimg.com/474x/74/84/75/7484756a6bda8153071ad23f1f098c4d.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Templates</div>
                  <p class="text-gray-700 text-base">
                    <a href="/get_emailtemplate_campaign">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</a>
                  </p>
                </div>
              </div>
              <div class="max-w-sm cursor-pointer hover:bg-gray-100 rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://i.pinimg.com/474x/9c/68/a0/9c68a0117cdee7961f49934b4ef6486c.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">Drag & drop editor</div>
                  <p class="text-gray-700 text-base">
                    <a href="/get_email_template_user_design">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</a>
                  </p>
                </div>
              </div>
              <div class="max-w-sm cursor-pointer hover:bg-gray-100 rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://i.pinimg.com/474x/be/2a/55/be2a5554782ceaee65b289a85c124c86.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">HTML editor</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
            </div>
        </section>
        <div class="flex items-center gap-4 mt-3">
            <x-primary-button type="submit">{{ __('Save Campaign Data') }}</x-primary-button>
            @if (session('status') === 'campaign-created')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __('Saved.') }}
        </p>
        @endif
        </div>
    </form>
  
</section>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

    // let selectedEmails = [];
    // document.getElementById('multiple-select').addEventListener('change', function() {
    //     Array.from(this.selectedOptions).forEach(option => {
    //         if (!selectedEmails.includes(option.value)) {
    //             selectedEmails.push(option.value);
    //         }
    //     });
        
    //     document.getElementById('sendto').value = JSON.stringify(selectedEmails);
    //     console.log(document.getElementById('sendto').value);
    // });
</script>
