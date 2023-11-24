@extends('index')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h1>Data Decision Matrix</h1>

        @if(!empty($matrixTable))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        @foreach($kriteriaNames as $kriteriaId => $kriteriaName)
                            <th>{{ $kriteriaName }}</th>
                        @endforeach
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matrixTable as $alternatifId => $kriteriaValues)
                        <tr>
                            <td>{{ $alternatifId }}</td>
                            @foreach($kriteriaNames as $kriteriaId => $kriteriaName)
                                <td>{{ $kriteriaValues[$kriteriaId] ?? '' }}</td>
                            @endforeach
                            <td>
                                <a href="{{ route('decfi.edit', $alternatifId) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form method="post" action="{{ route('decfi.destroy', $alternatifId) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data Decision Matrix yang tersimpan.</p>
        @endif
    </div>
@endsection
