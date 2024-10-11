@extends('contract')
@section('Table-Contract')
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>List</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contracts as $item)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $item->first_name }}</p>
                                <p class="text-muted mb-0">{{ $item->last_name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">{{ $item->email }}</p>
                    </td>
                    <td>
                        @if ($item->active == 1)
                            <span class="text-success">Opening</span>
                        @else
                            <span class="text-error">Closed</span>
                        @endif
                    </td>
                    @foreach ($listContract as $itemList)
                        @if ($item->list_contract_id == $itemList->id)
                            <td>{{ $itemList->name }}</td>
                        @else
                        @endif
                    @endforeach
                    <td>
                        <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Edit
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
