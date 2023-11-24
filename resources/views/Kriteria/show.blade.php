@extends('index')

@section('content')

<div class="container mt-5">
    <div class="card" style="background-color: #fff; color: #000; padding: 20px; border-radius: 10px;">
        <div class="card-header">
            Detail Kriteria
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" value="{{ $kriteria->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" class="form-control" id="nama_kriteria" value="{{ $kriteria->nama_kriteria }}" readonly>
            </div>
            <div class="mb-3">
                <label for="bobot_kriteria" class="form-label">Bobot Kriteria</label>
                <input type="text" class="form-control" id="bobot_kriteria" value="{{ $kriteria->bobot_kriteria }}" readonly>
            </div>
            <div class="mb-3">
                <label for="jenis_kriteria" class="form-label">Jenis Kriteria</label>
                <input type="text" class="form-control" id="jenis_kriteria" value="{{ $kriteria->jenis_kriteria }}" readonly>
            </div>

            <a href="{{ route('kriteria.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection
