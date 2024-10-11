@extends('contract')
@section('List-Contract')
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Tracking history</th>
                <th>Subscription management</th>
                <th></th>
                <th>
                    <a href="{{ route('get_v_create_list_contracts') }}" class="border-0 text-dark bg-white"><i
                            class="fa-solid fa-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listContract as $item)
                <tr>
                    <td class="w-50">
                        <p class=" mb-1">{{ $item->name }}</p>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"></p>
                    </td>
                    <td>
                        <p class=" mb-1"></p>
                    </td>
                    <td>
                        <a class="text-dark cursor-pointer"><span><i class="fa-regular fa-paper-plane"></i></span></a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a type="button" class=" border-0 text-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-list"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('get_v_add_contract_to_list', [$item->id ,$item->name]) }}" class="dropdown-item" href="#">Add Contract</a></li>
                                <li><a class="dropdown-item" href="#">Upload Contract</a></li>
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Coppy</a></li>
                                <li><a class="dropdown-item" href="#">Export</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
