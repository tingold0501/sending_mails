@extends('layouts.dashboard')
@section('ContractContent')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>


<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body d-inline-flex">
            <div class=""style="width: 80%;">
                <a onclick="history.back()" class="text-decoration-none cursor-pointer">Go Back</a>
                <h5 class=" fw-semibold mb-4 mt-3">Contract Page</h5>
                <p class="mb-0">This is a contract page </p>
            </div>
            <div class=" items-center justify-center" id="btnAdd">
                <a href="{{ route('get_contract_store') }}"  class="btn btn-outline-success">Add Contract</a>
            </div>
            <div class=" items-center justify-center" id="btnSend">
                <a  data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary">Send</a>
            </div>
        </div>
    </div>

    <ul class="d-flex d-grid gap-3">
        <li class="cursor-pointer ">
            <a href="{{ route('contract') }}" class="text-decoration-none cursor-pointer">
                <span class=''>Overview</span>
            </a>
        </li>
        <li class="cursor-pointer">
            <a class="text-decoration-none cursor-pointer " href="{{ route('get_v_segment') }}">
                <span class=' text-gray-400'>Segments</span>
            </a>
        </li>
        <li class="cursor-pointer">
            <span class=''>Lists</span>
        </li>
        <li class="cursor-pointer">
            <span class=''>History</span>
        </li>
        <li class="cursor-pointer">
            <span class=''>Unsubribed</span>
        </li>
        <li class="cursor-pointer">
            <span class=''>Devices Details</span>
        </li>
        <li class="cursor-pointer">
            <span class=''>Geography</span>
        </li>
    </ul>
    @yield('Contract-Create')
    @yield('Table-Contract')
    @yield('Segment-Content')
    @yield('Segment-All-Contract')
</div>
@endsection