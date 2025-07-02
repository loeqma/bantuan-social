@extends('layouts.app')

@section('content')
<div class="card shadow p-4 rounded mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="text-success">Daftar Penerima Bantuan</h3>
        <a href="{{ route('beneficiaries.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-success">
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
                    <span class="badge bg-{{ $item->status_penerima === 'Layak' ? 'success' : 'secondary' }}">
                        {{ $item->status_penerima }}
                    </span>
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
