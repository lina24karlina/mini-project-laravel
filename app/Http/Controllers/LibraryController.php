<?php

namespace App\Http\Controllers;

use App\Models\Perpus;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Perpus::all();
        return view('library', compact('books'));
    }

    public function showLibrary2()
    {
        $books = Perpus::all();
        return view('library2', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1000|max:2100',
            'penerbit' => 'required|string|max:255',
        ]);

        Perpus::create([
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit,
        ]);

        return redirect()->route('library2.index')->with('success', 'Buku berhasil disimpan');
    }

    public function edit($id)
    {
        $book = Perpus::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1000|max:2100',
            'penerbit' => 'required|string|max:255',
        ]);

        $book = Perpus::findOrFail($id);
        $book->update($request->all());

        return redirect()->route('library2.index')->with('success', 'Buku berhasil diperbarui');

    }

    public function destroy($id)
    {
        $book = Perpus::findOrFail($id);
        $book->delete();

        return redirect()->route('library2.index')->with('succes', 'Buku berhasil dihapus');
    }


}
