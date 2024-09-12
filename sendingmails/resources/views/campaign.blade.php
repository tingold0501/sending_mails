@extends('layouts.dashboard')
@section('CampaignContent')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body d-inline-flex" >
                <div class=""style="width: 80%;">
                    <a href="{{ route('campaign') }}">Go Back</a>
                    <h5 class=" fw-semibold mb-4 mt-3">Campaign Page</h5>
                    <p class="mb-0">This is a campaign page </p>
                </div>
                <div class=" items-center justify-center">
                    <a href="{{ route('get_campaign_create') }}"   class="btn btn-outline-success">Add Campaign</a>
                </div>
            </div>
        </div>

        <ul class="d-flex d-grid gap-3">
            <li class="cursor-pointer ">
                <span class=''>Campaign</span>
            </li>
            <li class="cursor-pointer">
                <span class=''>Draft</span>
            </li>
        </ul>
        @yield('Campaign-Create')
    </div>
@endsection
