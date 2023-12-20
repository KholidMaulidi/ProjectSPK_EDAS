@extends('index')

@section('content')
    <div class="container">
        <h1>Normalized SN (NSN)</h1>

        @if(!empty($nsnValues))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>NSN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($nsnValues as $idAlternatif => $nsnValue)
                        <tr>
                            <td>{{ $alternatifNames[$idAlternatif] }}</td>
                            <td>{{ $nsnValue }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data NSN yang tersedia.</p>
        @endif
    </div>
@endsection
