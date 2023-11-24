@extends('index')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('decfi.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf

                    @foreach($alternatif as $item)
                        @if(!$item->isUsed()) <!-- Gunakan metode isUsed() untuk mengecek apakah id_alternatif telah digunakan -->
                            <div class="card mb-4">
                                <div class="card-header">Input Nilai Decision Matrix untuk Alternatif {{ $item->nama_alternatif }} (ID: {{ $item->id }})</div>

                                <div class="card-body">
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <div class="form-group row">
                                        <label for="alternatif" class="col-md-4 col-form-label text-md-right">Alternatif</label>
                                        <div class="col-md-6">
                                            <input id="alternatif" type="text" class="form-control" value="{{ $item->nama_alternatif }}" readonly>
                                        </div>
                                    </div>

                                    @foreach($kriteria as $kriteriaItem)
                                        <div class="form-group row">
                                            <label for="value_{{ $kriteriaItem->id }}" class="col-md-4 col-form-label text-md-right">{{ $kriteriaItem->nama_kriteria }}</label>

                                            <div class="col-md-6">
                                                <input type="hidden" name="id_alternatif_{{ $item->id }}" value="{{ $item->id }}">
                                                <input type="hidden" name="id_kriteria_{{ $kriteriaItem->id }}" value="{{ $kriteriaItem->id }}">
                                                <input id="value_{{ $kriteriaItem->id }}" type="text" class="form-control" name="value_{{ $item->id }}_{{ $kriteriaItem->id }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
