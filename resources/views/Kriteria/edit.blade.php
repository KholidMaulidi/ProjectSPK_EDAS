@extends('index')

@section('content')

<div class="container mt-5">
    <div class="card" style="background-color: #fff; color: #000; padding: 20px; border-radius: 10px;">
        <div class="card-header">
            Edit Kriteria
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('kriteria.update', $kriteria->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="{{ $kriteria->nama_kriteria }}" required>
                </div>
                <div class="mb-3">
                    <label for="bobot_kriteria" class="form-label">Bobot Kriteria</label>
                    <input type="text" class="form-control" id="bobot_kriteria" name="bobot_kriteria" value="{{ $kriteria->bobot_kriteria }}" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kriteria" class="form-label">Jenis Kriteria</label>
                    <select class="form-select" id="jenis_kriteria" name="jenis_kriteria" required>
                        <option value="cost" {{ $kriteria->jenis_kriteria == 'cost' ? 'selected' : '' }}>Cost</option>
                        <option value="benefit" {{ $kriteria->jenis_kriteria == 'benefit' ? 'selected' : '' }}>Benefit</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection
