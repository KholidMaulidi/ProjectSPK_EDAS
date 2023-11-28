@extends('index')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div>
                    <h2 class="section-title fontjudul">Dashboard</h2>
                    <p class="section-lead">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Karyawan Terbaik
                        Menggunakan Metode EDAS</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt harum corrupti id amet, quisquam
                        repudiandae, placeat perspiciatis iure similique facere adipisci quas ut distinctio eius molestias
                        consectetur fugiat consequuntur iusto!
                    </p>

                </div>
                <h2 class="section-title">Artikel</h2>
                <iframe src="{{ asset('assets/artikel.pdf') }}" width="1150px" height="800px" style="border: 0;"></iframe>
            </div>
        </section>
    </div>
@endsection


{{-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('Layouts.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('Layouts.header')
        <!--  Header End -->
        <div class="container-fluid">

            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <h2 class="section-title">Artikel</h2>
                        <div class="card">
                            <div class="card-body">
                                <iframe src="{{ asset('assets/artikel.pdf') }}" width="100%" height="800px"
                                    frameborder="0"></iframe>
                                </iframe>
                            </div>
                        </div>

                    </div>
                </section>
            </div> --}}
{{-- <div class="card w-1000"> --}}
{{-- @yield('content') --}}
{{-- </div> --}}

{{-- </div>
    </div>
</div>
</div> --}}
