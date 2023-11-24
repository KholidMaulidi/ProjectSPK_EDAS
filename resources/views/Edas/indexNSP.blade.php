@extends('index')

@section('content')
    <div class="container">
        <h1>Normalized SP (NSP)</h1>

        @if(!empty($nspValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($nspValues as $idAlternatif => $nspValue)
                            <th>{{ $alternatifNames[$idAlternatif] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NSP</td>
                        @foreach($nspValues as $nspValue)
                            <td>{{ $nspValue }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        @else
            <p>Tidak ada data NSP yang tersedia.</p>
        @endif
    </div>
@endsection
