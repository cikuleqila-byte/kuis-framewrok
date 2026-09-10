<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Kategori;

class InformasiController extends Controller
{
    public function tampil()
    {
        $informasis = Informasi::with('kategori')->get();

        return view('informasi.daftar', [
            'informasis' => $informasis
        ]);
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('informasi.create', [
            'kategoris' => $kategoris
        ]);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'isi' => 'required|string',
            'sumber' => 'required|string|max:255',
            'status' => 'required'
        ]);

        $informasi = new Informasi();

        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('/informasi')
            ->with('success', 'Informasi berhasil disimpan');
    }

    public function ubah(Informasi $informasi)
    {
        $kategoris = Kategori::all();

        return view('informasi.ubah', [
            'informasi' => $informasi,
            'kategoris' => $kategoris
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'isi' => 'required|string',
            'sumber' => 'required|string|max:255',
            'status' => 'required'
        ]);

        $informasi = Informasi::find($request->get('id'));

        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('/informasi')
            ->with('success', 'Informasi berhasil diubah!');
    }

    public function hapus(Informasi $informasi)
    {
        $informasi->delete();

        return redirect('/informasi')
            ->with('success', 'Informasi berhasil dihapus');
    }
}