@extends('layouts.dashboard')
@section('ContractContent')
<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body d-inline-flex">
            <div class=""style="width: 80%;">
                <a onclick="history.back()" class="text-decoration-none cursor-pointer">Go Back</a>
                <h5 class=" fw-semibold mb-4 mt-3">Contract Page</h5>
                <p class="mb-0">This is a contract page </p>
            </div>
            <div class=" items-center justify-center">
                <a href="{{ route('get_contract_store') }}" class="btn btn-outline-success">Add Contract</a>
            </div>
        </div>
    </div>

    <ul class="d-flex d-grid gap-3">
        <li class="cursor-pointer ">
            <span class=''>Contract</span>
        </li>
        <li class="cursor-pointer">
            <span class=''>Draft</span>
        </li>
    </ul>
    @yield('Contract-Create')
    @yield('Table-Contract')
</div>
@endsection