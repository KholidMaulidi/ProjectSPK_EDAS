@extends('index')

@section('content')

<div class="container mt-5" style="background-color: #ffffff; color: #fff; padding: 5px;">

    <div class="row justify-content-center align-items-center">
        <div class="card container" style="background-color: #fff; color: #000; padding: 20px; border-radius: 10px; border: 2px solid #b4ccdb;">
            <div class="card-header">
                Tambah Kriteria
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
                <form method="post" action="{{ route('kriteria.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                        <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required style="border: 1px solid #b4ccdb;">
                    </div>
                    <div class="mb-3">
                        <label for="bobot_kriteria" class="form-label">Bobot Kriteria</label>
                        <input type="text" class="form-control" id="bobot_kriteria" name="bobot_kriteria" required style="border: 1px solid #b4ccdb;">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kriteria" class="form-label">Jenis Kriteria</label>
                        <select class="form-select" id="jenis_kriteria" name="jenis_kriteria" required style="border: 1px solid #b4ccdb;">
                            <option value="cost">Cost</option>
                            <option value="benefit">Benefit</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #3498db; border: 2px solid #3498db;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
