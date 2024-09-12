@extends('layouts.dashboard')
@section('CampaignContent')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body d-inline-flex" >
                <div class=""style="width: 80%;">
                    <h5 class=" fw-semibold mb-4">Campaign Page</h5>
                    <p class="mb-0">This is a campaign page </p>
                </div>
                <div class=" items-center justify-center">
                    <button type="button" class="btn btn-outline-success">Add Campaign</button>
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
    </div>
@endsection
