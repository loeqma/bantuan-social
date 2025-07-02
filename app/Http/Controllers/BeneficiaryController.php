<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index()
    {
        $beneficiaries = Beneficiary::all();
        return view('beneficiaries.index', compact('beneficiaries'));
    }

    public function create()
    {
        return view('beneficiaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:beneficiaries,nik',
            'alamat' => 'required',
            'jenis_bantuan' => 'required',
            'tanggal_lahir' => 'required|date',
            'status_penerima' => 'required|in:Layak,Tidak Layak',
        ]);

        Beneficiary::create($request->all());
        return redirect()->route('beneficiaries.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(Beneficiary $beneficiary)
    {
        return view('beneficiaries.show', compact('beneficiary'));
    }

    public function edit(Beneficiary $beneficiary)
    {
        return view('beneficiaries.edit', compact('beneficiary'));
    }

    public function update(Request $request, Beneficiary $beneficiary)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|unique:beneficiaries,nik,' . $beneficiary->id,
            'alamat' => 'required',
            'jenis_bantuan' => 'required',
            'tanggal_lahir' => 'required|date',
            'status_penerima' => 'required|in:Layak,Tidak Layak',
        ]);

        $beneficiary->update($request->all());
        return redirect()->route('beneficiaries.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();
        return redirect()->route('beneficiaries.index')->with('success', 'Data berhasil dihapus.');
    }
}
