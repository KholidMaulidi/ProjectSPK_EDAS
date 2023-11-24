@extends('index')

@section('content')
    <div class="container">
        <h1>Susilo Nambang (SN)</h1>

        @if(!empty($snValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($snValues as $idAlternatif => $sn)
                            <th>{{ $alternatifNames[$idAlternatif] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SN</td>
                        @foreach($snValues as $sn)
                            <td>{{ $sn }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        @else
            <p>Tidak ada data SP yang tersedia.</p>
        @endif
    </div>
@endsection
