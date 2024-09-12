@extends('campaign')
@section('Table-Campaign')
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Status</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $item)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        {{-- <img
                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    /> --}}
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $item->from_name }}</p>
                            <p class="text-muted mb-0">{{ $item->from_email }}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">{{ $item->subject }}</p>
                    <p class="text-muted mb-0">{{ $item->text }}</p>
                </td>
                <td>
                    @if ($item->active == 1)
                        <span class="text-success">Opening</span>
                    @else
                        <span class="text-error" >Closed</span>
                    @endif
                </td>
                <td>Senior</td>
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