<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function tampil()
    {
        $kategoris = Kategori::all();

        return view('daftar', [
            'kategoris' => $kategoris
        ]);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50'
        ]);

        $kategori = new Kategori();
        $kategori->nama = $request->get('nama');
        $kategori->save();

        return redirect('/kategori')
            ->with('success', 'Kategori berhasil disimpan');
        
    }

    public function hapus(Kategori $kategori)
    {
        $kategori->delete();

        return redirect('daftar-kategori')
            ->with('success', 'Kategori berhasil dihapus');
    }

    public function ubah(Kategori $kategori)
    {
        return view('kategori.ubah', [
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50'
        ]);

        $kategori = Kategori::find($request->get('id'));

        $kategori->nama = $request->get('nama');
         $kategori->save();

        return redirect('/kategori')
            ->with('success', 'Kategori berhasil diubah!');
        }
        
}