@extends('index')

@section('content')
    <div class="container">
        <h1>Normalized SP (NSP)</h1>

        @if(!empty($nspValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>NSP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nspValues as $idAlternatif => $nspValue)
                        <tr>
                            <td>{{ $alternatifNames[$idAlternatif] }}</td>
                            <td>{{ $nspValue }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data NSP yang tersedia.</p>
        @endif
    </div>
@endsection
