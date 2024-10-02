@extends('contract')
@section('Segment-All-Contract')
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>
                    <i class="fa-solid fa-caret-down"></i>
                </th>
                <th>Email</th>
                <th>Status</th>
                <th>Send</th>
                <th>Opened</th>
                <th>Clicked</th>
                <th>Invalid</th>
                <th><i class="fa-solid fa-arrow-down" style="margin-right: 10px"></i>Added</th>
                <th><i class="fa-solid fa-arrow-down" style="margin-right: 10px"></i>Updated</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contracts as $item)
                <tr>
                    <td>
                        <input class="form-check-input mt-0" type="checkbox" value=""
                            aria-label="Checkbox for following text input">
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
                    <td>
                        <span>0</span>
                    </td>
                    <td>
                        <span>0</span>
                    </td>
                    <td>
                        <span>0</span>
                    </td>
                    <td>
                        <span>0</span>
                    </td>
                    <td>
                        <span>{{ $item->created_at }}</span>
                    </td>
                    <td>
                        <span>{{ $item->updated_at }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
