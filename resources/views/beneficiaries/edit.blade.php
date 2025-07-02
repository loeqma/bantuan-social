@extends('layouts.app')

@section('content')
<div class="card shadow p-4 bg-white rounded">
    <h3 class="mb-4">Edit Penerima Bantuan</h3>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('beneficiaries.update', $beneficiary->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $beneficiary->nama_lengkap }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" value="{{ $beneficiary->nik }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ $beneficiary->alamat }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Bantuan</label>
            <input type="text" name="jenis_bantuan" value="{{ $beneficiary->jenis_bantuan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $beneficiary->tanggal_lahir }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Status Penerima</label>
            <select name="status_penerima" class="form-select" required>
                <option value="Layak" {{ $beneficiary->status_penerima == 'Layak' ? 'selected' : '' }}>Layak</option>
                <option value="Tidak Layak" {{ $beneficiary->status_penerima == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('beneficiaries.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
