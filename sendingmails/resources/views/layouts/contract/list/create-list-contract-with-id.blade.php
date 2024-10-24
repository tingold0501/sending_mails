@extends('contract')
@section('Create-List-Contract')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Contract Forms</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('add_contract_to_list_with_id',$id) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    autocomplete="current-email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Email will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="first_name" class="form-control" id="first_name" name="first_name"
                                    autocomplete="current-first_name">
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                <div id="emailHelp" class="form-text">First Name will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="last_name" class="form-control" id="last_name" name="last_name"
                                    autocomplete="current-last_name">
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Last Name will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="contract_statue_id" class="form-label">Contract Status</label>
                                <select class="js-example-basic-single form-control" name="contract_statue_id">
                                    @foreach ($contractStatus as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('contract_statue_id')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <label for="list_contract_id" class="form-label">List Contracts</label>
                                
                                <select disabled class="js-example-basic-single form-control" name="list_contract_id">
                                        <option  value="{{ $id }}">{{ $name }}</option>
                                </select>
                                <div id="list_contract_idHelp" class="form-text">If you not chose list contract, it will be
                                    created with the first name.</div>
                                <x-input-error :messages="$errors->get('list_contract_id')" class="mt-2" />
                            </div>

                            <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
