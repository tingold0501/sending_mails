@extends('layout')
@section('Table')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8  dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <div class="card">
                <h5 class="card-header">Table Contract</h5>
                <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Users</th>
                        <th>Create At</th>
                        <th>Update At</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($contracts as $contract)
                        <tr>
                            {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> --}}
                            <td>{{ $contract->email }}</td>
                            {{-- <td> --}}
                            {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Lilian Fuller"
                                >
                                <img src="{{ $contract->avatar }}" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Sophia Wilkerson"
                                >
                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Christina Parker"
                                >
                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul> --}}
                            {{-- </td> --}}
                            {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                            <td>{{ $contract->first_name }}  {{$contract->last_name}}</td>
                            <td>{{ $contract->created_at }}</td>
                            <td>{{ $contract->updated_at.' - '.Carbon\Carbon::parse($contract->updated_at)->diffForHumans() }}</td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('contract.edit', $contract->id)}}">
                                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="{{}}"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection