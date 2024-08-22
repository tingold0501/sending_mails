@extends('layout')
@section('Table')
<div class="py-12 mt-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8  dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <div class="card">
                <h5 class="card-header">Table Contract</h5>
                <div class="table-responsive text-nowrap">
                    @if ($contracts->count() > 0)
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
                                        <td>{{ $contract->email }}</td>
                                        <td>{{ $contract->first_name }}  {{$contract->last_name}}</td>
                                        <td>{{ $contract->created_at.' - ' }} <span class="badge bg-label-success">{{Carbon\Carbon::parse($contract->created_at)->diffForHumans()}}</span> </td>
                                        <td>{{ $contract->updated_at.' - ' }} <span class="badge bg-label-success">{{Carbon\Carbon::parse($contract->updated_at)->diffForHumans()}}</span }}</td>
                                        <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('contract.edit', $contract->id)}}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="{{}}"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <img style="width: 100%; height: 80vh; object-fit: cover; object-position: center" src="{{ asset('images/contractnull.jpg') }}" alt="" srcset="">
                    @endif
                </div>
                </div>
            </div>

            <div class="max-w-xl mt-5">
                <div class="card">
                <h5 class="card-header">Table Campaign</h5>
                <div class="table-responsive text-nowrap">
                    @if ($contracts->count() > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th>From Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Content</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($campaigns as $campaign)
                                    <tr>
                                        <td class="cursor-pointer" data-toggle="tooltip" data-placement="top" title={{$campaign->sendto}}>
                                            {{ $campaign->from_name }}
                                        </td>
                                        <td>{{ $campaign->from_email }}</td>
                                        <td>{{ $campaign->subject }}</td>
                                        <td>{{ $campaign->text }}</td>
                                        <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('contract.edit', $contract->id)}}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            {{-- <a class="dropdown-item" href="{{}}"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <img style="width: 100%; height: 80vh; object-fit: cover; object-position: center" src="{{ asset('images/contractnull.jpg') }}" alt="" srcset="">
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection