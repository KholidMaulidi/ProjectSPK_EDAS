@extends('index')
@section('content')
    <div class="container">
        <h1 style="padding-bottom: 20px">Hasil Perhitungan</h1>
        {{-- 1. Menetukan matriks keputusan --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Matriks Keputusan</h5>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Kriteria/Alternatif</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K1</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K3</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K4</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K5</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A1</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A2</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A3</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A4</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A5</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 2. menentukan solusi rata-rata average solution (Av) --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Nilai Rata-rata Average Solution (AV)</h5>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AV1</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AV2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AV3</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AV4</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AV5</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0"></h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 3. menentukan jarak positif dan jarak negatif dari rata-rata (PDA/NDA) --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Nilai jarak positif dan negatif dari rata-rata (PDA/NDA)</h5>
            <h6 class="card-title fw-semibold mb-4">PDA</h6>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K1</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K3</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K4</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K5</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h6 class="card-title fw-semibold mb-4">NDA</h6>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K1</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K3</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K4</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">K5</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 4. menentukan jumlah terbobot dari PDA/NDA (SP/SN) --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Jumlah terbobot dari PDA/NDA (SP/SN)</h5>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Alternatif</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">SP</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">SN</h6>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A1</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>

                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A2</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>

                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A3</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A4</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 5. normalisasi nilai SP/SN (NSP/NSN) --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Normalisasi Nilai SP/SN (NSP/NSN)</h5>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Alternatif</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">NSP</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">NSN</h6>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A1</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>

                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A2</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>

                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A3</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A4</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 6. menghitung nilai skor penilaian (AS) --}}
        <div class="card-body p-4 shadow rounded">
            <h5 class="card-title fw-semibold mb-4">Hasil Perankingan</h5>
            <div class="table-responsive table-striped table-bordered">
                <table border="1" class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Alternatif</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">AS</h6>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A1</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A2</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A3</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">A4</h6>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
