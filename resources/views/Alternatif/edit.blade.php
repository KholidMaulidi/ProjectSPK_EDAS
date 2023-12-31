@extends('index')

@section('content')
    <div class="container mt-5">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Alternatif
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
                <form method="post" action="{{ route('alternatif.update', $alternatif->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_alternatif" class="form-label">Nama Alternatif</label>
                        <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="{{ $alternatif->nama_alternatif }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
