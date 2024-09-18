<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
    <style>
        /* Tambahkan jarak bawah untuk setiap input dan label */
        label {
            margin-bottom: 5px;
            display: inline-block; /* Agar label tetap di sebelah input */
        }

        input {
            margin-bottom: 15px; /* Menambahkan jarak di bawah input */
        }

        form {
            margin-bottom: 20px; /* Menambahkan jarak bawah untuk keseluruhan form */
        }
    </style>
</head>
<body>

    <h1>Daftar Buku</h1>

    <!-- Formulir untuk menambahkan buku -->
    <form action="{{ route('library.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->

        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku" value="{{ old('judul_buku') }}" required>
        <br>

        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang" value="{{ old('pengarang') }}" required>
        <br>

        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}" required min="0">
        <br>

        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}" required>
        <br>

        <form action="{{ route('library.store') }}" method="POST">
    @csrf
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('library2.index') }}"></a>

</body>
</html>
