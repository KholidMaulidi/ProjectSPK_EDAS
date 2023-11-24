@extends('index')

@section('content')

<div class="container mt-5">
    <div class="card" style="background-color: #fff; color: #000; padding: 20px; border-radius: 10px;">
        <div class="card-header">
            Detail Alternatif
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" value="{{ $alternatif->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                <input type="text" class="form-control" id="nama_alternatif" value="{{ $alternatif->nama_alternatif }}" readonly>
            </div>

            <a href="{{ route('alternatif.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection
