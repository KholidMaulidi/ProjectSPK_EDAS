<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="..\assets\images\logos\favicon.png" class="text-nowrap logo-img">
                <img src="{{ asset('/assets/images/logos/EDAS.png') }}" width="60" alt="" class="logo-sidebar" />
                {{-- <div class="edas-sidebar">EDAS</div> --}}
                <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                 <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                     <span class="hide-menu">EDAS COMPONENTS</span>
                </li>
                {{-- @endif --}}


                @can('kriteria')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('kriteria.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">Kriteria</span>
                        </a>
                    </li>
                @endcan
                @can('alternatif')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('alternatif.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-alert-circle"></i>
                            </span>
                            <span class="hide-menu">Alternatif</span>

                        </a>
                    </li>
                @endcan
                <li class="sidebar-item">
                    @can('kriteria')
                        <a class="sidebar-link" href="{{ route('decision_matrix.index') }}" aria-expanded="false">

                            <span>
                                <i class="ti ti-cards"></i>
                            </span>
                            <span class="hide-menu">Matrix Table</span>
                        </a>
                    </li>
                @endcan
                @can('decision_matrix')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('decision_matrix.create.form') }}" aria-expanded="false">

                            <span>
                                <i class="ti ti-file-description"></i>
                            </span>
                            <span class="hide-menu">Buat Matrix</span>
                        </a>
                    </li>
                @endcan
                @can('Hasil')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('hasil')}}" aria-expanded="false">
                            <span>
                                <i class="ti ti-typography"></i>
                            </span>
                            <span class="hide-menu">Hasil</span>
                        </a>
                    </li>
                @endcan

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
