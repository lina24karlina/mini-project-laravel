<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
</head>
<body>

     <h1>Edit Buku</h1>

    <!-- Formulir untuk menambahkan buku -->
    <form action="{{ route('library.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku" value="{{ $book->judul_buku }}" required>
        <br>

        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" value="{{ $book->pengarang }}" required>
        <br>

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ $book->tahun_terbit }}" required min="0">
        <br>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="{{ $book->penerbit }}" required>
        <br>

        <form action="{{ route('library2.index') }}" method="POST">

    <button type="submit">Simpan Perubahan</button>


</body>
</html>
