@extends('layouts.app')

@section('content')
<div class="card shadow p-4 rounded mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="text-warning">Daftar Penerima Bantuan</h3>
        <a href="{{ route('beneficiaries.create') }}" class="btn btn-warning">
            <i class="bi bi-plus-circle"></i> Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-warning table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Jenis Bantuan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beneficiaries as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jenis_bantuan }}</td>
                <td>
                    @if($item->status_penerima === 'Layak')
                        <span class="badge badge-layak">Layak</span>
                    @else
                        <span class="badge badge-tidak">Tidak Layak</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('beneficiaries.edit', $item->id) }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('beneficiaries.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
