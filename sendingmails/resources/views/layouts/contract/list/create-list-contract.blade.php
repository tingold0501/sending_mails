@extends('contract')
@section('Create-List-Contract')
<div class="input-group input-group-lg bg-white]">
    <form method="POST" action="{{ route('list-store') }} " class="w-100">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name List</label>
            <input type="name" class="form-control" id="name" name="name"
                autocomplete="current-name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <div id="nameHelp" class="form-text">Name List.</div>
        </div>
        <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4">
            {{ __('Save') }}
        </x-primary-button>
    </form>
</div>
@endsection
