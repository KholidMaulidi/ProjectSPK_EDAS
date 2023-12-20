@extends('index')

@section('content')
    <div class="container">
        <h1>Table SN</h1>

        @if(!empty($snValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>SN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($snValues as $idAlternatif => $sn)
                        <tr>
                            <td>{{ $alternatifNames[$idAlternatif] }}</td>
                            <td>{{ $sn }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data SN yang tersedia.</p>
        @endif
    </div>
@endsection
