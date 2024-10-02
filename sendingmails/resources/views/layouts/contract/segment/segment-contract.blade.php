@extends('contract')
@section('Segment-Content')
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Rule</th>
                <th>Tracking history</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>
                    <a href="{{ route('get_v_segment_all_contracts') }}">

                        <p class="fw-normal mb-1">All Contracts</p>
                    </a>

                </td>
                <td class="text-sm">
                    <p class=" text-muted  mb-1 fw-lighter">Complete list all contracts</p>
                </td>
                <td class="fs-3">
                    <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                        <i class="fa-solid fa-circle-check" style = "width: 100%"></i>
                    </button>
                    <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-list"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr class="">
              <td>
                  <a href="{{ route('get_v_segment_all_contracts') }}">

                      <p class="fw-normal mb-1">Engaged Contracts</p>
                  </a>

              </td>
              <td class="text-sm">
                  <p class=" text-muted  mb-1 fw-lighter">Status = Engaged</p>
              </td>
              <td class="fs-3">
                  <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                      <i class="fa-solid fa-circle-check" style = "width: 100%"></i>
                  </button>
                  <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                      <i class="fa-solid fa-paper-plane"></i>
                  </button>
                  <div class="btn-group">
                      <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa-solid fa-list"></i>
                      </button>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                  </div>
              </td>
          </tr>
          <tr class="">
            <td>
                <a href="{{ route('get_v_segment_all_contracts') }}">
                    <p class="fw-normal mb-1">Active Contracts</p>
                </a>
            </td>
            <td class="text-sm">
                <p class=" text-muted  mb-1 fw-lighter">Status = Active</p>
            </td>
            <td class="fs-3">
                <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                    <i class="fa-solid fa-circle-check" style = "width: 100%"></i>
                </button>
                <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
                <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-list"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr class="">
          <td>
              <a href="{{ route('get_v_segment_all_contracts') }}">

                  <p class="fw-normal mb-1">Blocked Contracts</p>
              </a>

          </td>
          <td class="text-sm">
              <p class=" text-muted  mb-1 fw-lighter">Status = Bounced OR Status = Unsubscribed OR Status = Abuse</p>
          </td>
          <td class="fs-3">
              <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                  <i class="fa-solid fa-circle-check" style = "width: 100%"></i>
              </button>
              <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                  <i class="fa-solid fa-paper-plane"></i>
              </button>
              <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa-solid fa-list"></i>
                  </button>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
              </div>
          </td>
      </tr>
      <tr class="">
        <td>
            <a href="{{ route('get_v_segment_all_contracts') }}">

                <p class="fw-normal mb-1">Slate Contracts</p>
            </a>

        </td>
        <td class="text-sm">
            <p class=" text-muted  mb-1 fw-lighter">Status = Slate</p>
        </td>
        <td class="fs-3">
            <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                <i class="fa-solid fa-circle-check" style = "width: 100%"></i>
            </button>
            <button type="button" class="btn bg-blue-500 btn-success btn-xl btn-rounded">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-list"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
        </td>
    </tr>
        </tbody>
    </table>
@endsection
