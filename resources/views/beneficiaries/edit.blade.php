@extends('layouts.app')

@section('content')
<div class="card shadow p-4 rounded mb-4">
    <h3 class="mb-4 text-warning">Edit Data Penerima</h3>

    @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
    @endif

    <form action="{{ route('beneficiaries.update', $beneficiary->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $beneficiary->nama_lengkap }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ $beneficiary->nik }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $beneficiary->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Bantuan</label>
            <input type="text" name="jenis_bantuan" class="form-control" value="{{ $beneficiary->jenis_bantuan }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $beneficiary->tanggal_lahir }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status Penerima</label>
            <select name="status_penerima" class="form-select" required>
                <option value="Layak" {{ $beneficiary->status_penerima == 'Layak' ? 'selected' : '' }}>Layak</option>
                <option value="Tidak Layak" {{ $beneficiary->status_penerima == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning"><i class="bi bi-save"></i> Perbarui</button>
        <a href="{{ route('beneficiaries.index') }}" class="btn btn-outline-warning">Kembali</a>
    </form>
</div>
@endsection
