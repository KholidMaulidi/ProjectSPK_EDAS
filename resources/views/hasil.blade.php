@extends('index')
@section('content')
    {{-- average --}}
    <div class="container">
        <h1 style="padding-bottom: 20px">Hasil Perhitungan</h1>



        <div class="container">
            {{-- @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif --}}

            <h1>Data Average</h1>

            @if (!empty($averageTable))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
                            <th>Nilai Rata-Rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($averageTable as $kriteriaId => $averageValue)
                            <tr>
                                <td>{{ $kriteriaId }}</td>
                                <td>{{ $averageValue }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Tidak ada data Average yang tersimpan.</p>
            @endif
        </div>

        <div class="container">
            {{-- @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif --}}

            <h1>Data Performance Degree of Agreement (PDA)</h1>

            @if (!empty($pdaTable))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($kriteriaNames as $kriteriaId => $kriteriaName)
                                <th>{{ $kriteriaName }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pdaTable as $alternatifId => $kriteriaValues)
                            <tr>
                                <td>{{ $alternatifId }}</td>
                                @foreach ($kriteriaNames as $kriteriaId => $kriteriaName)
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


        <div class="container">
            {{-- @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif --}}

            <h1>Data Performance Degree of Agreement (PDA)</h1>

            @if (!empty($ndaTable))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($kriteriaNames as $kriteriaId => $kriteriaName)
                                <th>{{ $kriteriaName }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ndaTable as $alternatifId => $kriteriaValues)
                            <tr>
                                <td>{{ $alternatifId }}</td>
                                @foreach ($kriteriaNames as $kriteriaId => $kriteriaName)
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

        <div class="container">
            <h1>Susilo bambang (SP)</h1>

            @if (!empty($spValues))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($spValues as $idAlternatif => $sp)
                                <th>{{ $alternatifNames[$idAlternatif] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SP</td>
                            @foreach ($spValues as $sp)
                                <td>{{ $sp }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Tidak ada data SP yang tersedia.</p>
            @endif
        </div>

        <div class="container">
            <h1>Susilo Nambang (SN)</h1>

            @if (!empty($snValues))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($snValues as $idAlternatif => $sn)
                                <th>{{ $alternatifNames[$idAlternatif] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SN</td>
                            @foreach ($snValues as $sn)
                                <td>{{ $sn }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Tidak ada data SP yang tersedia.</p>
            @endif
        </div>


        <div class="container">
            <h1>Normalized SP (NSP)</h1>

            @if (!empty($nspValues))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($nspValues as $idAlternatif => $nspValue)
                                <th>{{ $alternatifNames[$idAlternatif] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NSP</td>
                            @foreach ($nspValues as $nspValue)
                                <td>{{ $nspValue }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Tidak ada data NSP yang tersedia.</p>
            @endif
        </div>

        <div class="container">
            <h1>Normalized SN (NSN)</h1>

            @if (!empty($nsnValues))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Alternatif</th>
                            @foreach ($nsnValues as $idAlternatif => $nsnValue)
                                <th>{{ $alternatifNames[$idAlternatif] }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NSN</td>
                            @foreach ($nsnValues as $nsnValue)
                                <td>{{ $nsnValue }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Tidak ada data NSN yang tersedia.</p>
            @endif
        </div>


        <div class="container">
            <h1>Aggregated Score (AS) Ranking</h1>

            @if (!empty($asValues))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ranking</th>
                            <th>Alternatif</th>
                            <th>AS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ranking as $rank => $idAlternatif)
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
