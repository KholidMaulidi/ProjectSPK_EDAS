@extends('index')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h1>Data Average</h1>

        @if(!empty($averageTable))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>Nilai Rata-Rata</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($averageTable as $kriteriaId => $averageValue)
                        <tr>
                            {{-- <td>{{ $kriteriaId }}</td> --}}
                            <td>{{ $kriteriaNames[$kriteriaId] }}</td>
                            <td>{{ $averageValue }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data Average yang tersimpan.</p>
        @endif
    </div>
@endsection
