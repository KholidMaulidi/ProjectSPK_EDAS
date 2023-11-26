@extends('index')

@section('content')
    <div class="container">
        <h1>Edit Decision Matrix - {{ $alternatif->nama_alternatif }}</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="post" action="{{ route('decfi.update', $alternatif->id) }}">
            @csrf
            @method('PUT')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kriteria as $kriteriaItem)
                        <tr>
                            <td>{{ $kriteriaItem->nama_kriteria }}</td>
                            <td>
                                <input type="number" name="value[{{ $kriteriaItem->id }}]" value="{{ $matrixTable[$kriteriaItem->id] ?? '' }}" class="form-control">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
