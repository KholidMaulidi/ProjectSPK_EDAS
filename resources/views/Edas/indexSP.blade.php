@extends('index')

@section('content')
    <div class="container">
        <h1>Susilo bambang (SP)</h1>

        @if(!empty($spValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($spValues as $idAlternatif => $sp)
                            <th>{{ $alternatifNames[$idAlternatif] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SP</td>
                        @foreach($spValues as $sp)
                            <td>{{ $sp }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        @else
            <p>Tidak ada data SP yang tersedia.</p>
        @endif
    </div>
@endsection
