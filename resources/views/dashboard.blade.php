@extends('index')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div>
                    <h2 class="section-title fontjudul">Dashboard</h2>
                    <p class="section-lead">Selamat Datang di Sistem Pendukung Keputusan Pemilihan Minuman yang Banyak
                        Terjual dengan Menggunakan Metode EDAS</p>
                    <h3 class="judul">Deskripsi</h3>
                    <p class="deskripsi">
                        Metode EDAS menggunakan solusi rata-rata untuk penilaian alternatif dengan cara menghitung jarak
                        rata-rata positif (PDA) dan jarak rata-rata negatif (NDA). Metode ini sangat berguna ketika kriteria
                        yang bertentangan harus dipertimbangkan (benefit dan cost), stabil ketika berbagai kriteria bobot
                        digunakan, dan konsisten dengan metode lain. <br> Hasil akhir pengambilan keputusan multikriteria
                        berdasarkan pada skor penilaian Apraisal Score (AS) tertinggi untuk mendapatkan pilihan terbaik dari
                        semua alternatif. Kesederhanaan dan perhitungan yang lebih cepat adalah keuntungan metode ini,
                        terutama karena keunggulan ini tidak mempengaruhi akurasi perhitungan.
                    </p>

                    <h3 class="judul">Tahapan Metode EDAS</h3>
                    <ol>
                        <li>Pembentukan Matriks Keputusan (X)</lli>
                        <li>Menentukan Average Solution (AV)</li>
                        <li>Menentukan Jarak Positif/Negatif dari Rata-rata (PDA/NDA)</li>
                        <li>Menentukan Jumlah Terbobot dari PAD/NDA (SP/SN)</li>
                        <li>Normalisasi Nilai SP/SN (NSP/NSN)</li>
                        <li>Menghitung Nilai Skor Penilaian (AS)</li>
                        <li>Perankingan Alternatif</li>

                    </ol>
                </div>
                <h2 class="section-title judulartikel">Artikel</h2>
                <iframe src="{{ asset('assets/artikel.pdf') }}" width="1150px" height="800px" style="border: 0;"></iframe>
            </div>
        </section>
    </div>
@endsection
