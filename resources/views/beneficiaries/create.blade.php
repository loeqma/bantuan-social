@extends('layouts.app')

@section('content')
<div class="card shadow p-4 rounded mb-4">
    <h3 class="mb-4 text-warning">Tambah Data Penerima</h3>

    @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('beneficiaries.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Bantuan</label>
            <input type="text" name="jenis_bantuan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status Penerima</label>
            <select name="status_penerima" class="form-select" required>
                <option value="Layak">Layak</option>
                <option value="Tidak Layak">Tidak Layak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning"><i class="bi bi-save"></i> Simpan</button>
        <a href="{{ route('beneficiaries.index') }}" class="btn btn-outline-warning">Kembali</a>
    </form>
</div>
@endsection
