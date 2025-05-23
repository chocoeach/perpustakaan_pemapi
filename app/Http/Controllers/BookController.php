<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return view('book.edit', compact('books'));
    }

    public function update(Request $request, $id)
    {
        $books = Book::find($id);

        // Validasi untuk update
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'book_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Memungkinkan untuk tidak mengganti gambar
        ]);

        // Mengupdate informasi buku
        $books->update($validated);

        // Cek apakah ada gambar baru yang di-upload
        if ($request->hasFile('book_image')) {
            // Hapus gambar lama jika ada
            if ($books->book_image && Storage::exists('public/' . $books->book_image)) {
                Storage::delete('public/' . $books->book_image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('book_image')->store('book_images', 'public');
            $books->book_image = $imagePath;
            $books->save();
        }

        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        $books = Book::find($id);

        // Hapus gambar buku jika ada
        if ($books->book_image && Storage::exists('public/' . $books->book_image)) {
            Storage::delete('public/' . $books->book_image);
        }

        $books->delete();
        return redirect()->route('book.index');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'book_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan gambar
        if ($request->hasFile('book_image')) {
            $imagePath = $request->file('book_image')->store('book_images', 'public');
        }

        // Simpan data buku
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->book_image = $imagePath;
        $book->save();

        return redirect()->route('book.index');
    }
}
