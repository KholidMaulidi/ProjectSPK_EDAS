@extends('index')

@section('content')
    <div class="container">
        <h1>Table SP</h1>

        @if(!empty($spValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>SP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($spValues as $idAlternatif => $sp)
                        <tr>
                            <td>{{ $alternatifNames[$idAlternatif] }}</td>
                            <td>{{ $sp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data SP yang tersedia.</p>
        @endif
    </div>
@endsection
