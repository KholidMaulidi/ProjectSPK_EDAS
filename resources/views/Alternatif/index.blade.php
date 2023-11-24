@extends('index')

@section('content')
    <div class="card-body">
        <a href="{{ route('alternatif.create') }}" class="btn btn-primary mb-3 ml-3">Tambah Alternatif</a>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif

        @if(Session::has('info'))
        <div class="alert alert-info">
            {{ Session::get('info') }}
            @php
            Session::forget('info');
            @endphp
        </div>
        @endif

        <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
            <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Pencarian">
            <button type="submit" class="btn btn-primary mb-1">
                <span class="fa fa-search"></span> Cari
            </button>
            <div class="input-group-append"></div>
        </div>
    </form>

    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">ALTERNATIF</h5>
        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama Alternatif</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Alternatif as $alternatif)
                    <tr>
                        <td>{{ $alternatif->id }}</td>
                        <td>{{ $alternatif->nama_alternatif }}</td>
                        <td>
                            <a href="{{ route('alternatif.show', $alternatif->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('alternatif.edit', $alternatif->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('alternatif.destroy', $alternatif->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
