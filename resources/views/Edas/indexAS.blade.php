@extends('index')

@section('content')
    <div class="container">
        <h1>Aggregated Score (AS) Ranking</h1>

        @if(!empty($asValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ranking</th>
                        <th>Alternatif</th>
                        <th>AS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ranking as $rank => $idAlternatif)
                        <tr>
                            <td>{{ $rank + 1 }}</td>
                            <td>{{ $alternatifNames[$idAlternatif] }}</td>
                            <td>{{ $asValues[$idAlternatif] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data AS yang tersedia.</p>
        @endif
    </div>
@endsection
