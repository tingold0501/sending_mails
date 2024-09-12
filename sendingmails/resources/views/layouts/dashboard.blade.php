<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
    <link rel="shortcut icon" type="image/png" href="/dashboard/assets/images/logos/seodashlogo.png" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/dashboard/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="" class="{{ route('user-dashboard') }}">
                        <img src="/dashboard/assets/images/logos/seodashlogo.png" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('user-dashboard') }}" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">OPTIONS</span>
                        </li>
                        <li class="sidebar-item">
                          <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                              <span>
                                  <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                              </span>
                              <span class="hide-menu">Activity</span>
                          </a>
                      </li>
                        <li class="sidebar-item">
                            <div class="dropdown">
                              <a class="sidebar-link dropdown-toggle cursor-pointer "  data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Audicence</span>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('contract')}}">Contract</a></li>
                                <li><a class="dropdown-item" href="#">Form</a></li>
                                <li><a class="dropdown-item" href="#">Landing Page</a></li>
                              </ul>
                            </div>
                        </li>
                        <li class="sidebar-item">
                          <div class="dropdown">
                            <a class="sidebar-link dropdown-toggle cursor-pointer "  data-bs-toggle="dropdown" aria-expanded="false">
                              <span>
                                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                              </span>
                              <span class="hide-menu">Campaigns</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href={{ route('campaign') }}>All Campaign</a></li>
                              <li><a class="dropdown-item" href="#">Email Template</a></li>
                            </ul>
                          </div>
                      </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Automation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Verifications</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Export</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:text-field-focus-bold-duotone"
                                        class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Settings</span>
                            </a>
                        </li>
                      
                    </ul>
                    <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3">
                        <div class="d-flex">
                            <div class="unlimited-access-title me-3">
                                <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">Upgrade to pro</h6>
                                <a href={{route('logout')}} target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Log Out</a>
                            </div>
                            <div class="unlimited-access-img">
                                <img src="/dashboard/assets/images/backgrounds/rocket.png" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="#" target="_blank" class="btn btn-primary me-2"><span
                                    class="d-none d-md-block">Check Pro
                                    Version</span> <span class="d-block d-md-none">Pro</span></a>
                            <a href="#" target="_blank" class="btn btn-success"><span
                                    class="d-none d-md-block">Download Free </span>
                                <span class="d-block d-md-none">Free</span></a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/dashboard/assets/images/profile/user-1.jpg" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href={{ route('logout') }}
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('DashboardContent')
            @yield('ContractContent')
            @yield('CampaignContent')
        </div>
    </div>
    <script src="/dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/dashboard/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/dashboard/assets/js/sidebarmenu.js"></script>
    <script src="/dashboard/assets/js/app.min.js"></script>
    <script src="/dashboard/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
