@extends('campaign')
@section('Campaign-Create')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Campaign Forms</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('create_campaign') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <select class="js-example-basic-multiple form-control" multiple ="multiple" name="sendto[]">
                                    @foreach ($contracts as $item)
                                        <option value="{{ $item->email }}">
                                            {{ $item->email }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('contract_statue_id')" class="mt-2" />
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="from_name" class="form-label">From Name</label>
                                <input type="from_name" class="form-control" id="from_name" name="from_name"
                                    autocomplete="current-from_name">
                                <x-input-error :messages="$errors->get('from_name')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Name will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="from_email" class="form-label">From Email</label>
                                <input type="from_email" class="form-control" id="from_email" name="from_email"
                                    autocomplete="current-from_email">
                                <x-input-error :messages="$errors->get('from_email')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Email will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="subject" class="form-control" id="subject" name="subject"
                                    autocomplete="current-subject">
                                <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Subject will display on your email.</div>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Text Privew</label>
                                <input type="text" class="form-control" id="text" name="text"
                                    autocomplete="current-text">
                                <x-input-error :messages="$errors->get('text')" class="mt-2" />
                                <div id="emailHelp" class="form-text">Text will display on your email.</div>
                            </div>
                            {{-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> --}}
                            <x-primary-button class="btn btn-primary w-100 py-8 fs-4 mb-4">
                                {{ __('Save') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center" style="width: 70%;">
                        <div class="card border-success mb-3 cursor-pointer" style="max-width: 18rem; margin-right: 50px;">
                                <div class="card-header d-flex align-items-center">
                                    <img class="card-img-top"
                                        src="https://i.pinimg.com/474x/86/05/cc/8605cc4fa3b97c0ac39e5b76a2eed757.jpg" alt="">
                                </div>
                            <a href="{{route('email-template')}}">
                                <div class="card-body text-success">
                                    <h5 class="card-title">Drag & Drop Email Template</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>
                                </div>
                            </a>
                           
                        </div>
                        <div class="card border-success mb-3 cursor-pointer" style="max-width: 18rem;">
                            <div class="card-header d-flex align-items-center">
                                <img class="card-img-top"
                                    src="https://i.pinimg.com/564x/fc/36/52/fc365285e16ac3a785071c46dbc0aa3e.jpg" alt="">
                            </div>
                            <div class="card-body text-success">
                                <h5 class="card-title">Email Templates</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
