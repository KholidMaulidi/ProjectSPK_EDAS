@extends('index')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h1>Data Decision Matrix</h1>

        @if(!empty($pdaTable))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($kriteriaNames as $kriteriaId => $kriteriaName)
                            <th>{{ $kriteriaName }}</th>
                        @endforeach
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pdaTable as $alternatifId => $kriteriaValues)
                        <tr>
                            <td>{{ $alternatifId }}</td>
                            @foreach($kriteriaNames as $kriteriaId => $kriteriaName)
                                <td>{{ $kriteriaValues[$kriteriaId] ?? '' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data Decision Matrix yang tersimpan.</p>
        @endif
    </div>
@endsection
