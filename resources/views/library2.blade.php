<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Bukut</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('library.create') }}"></a>

    <table border="1">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book )
            <tr>
                <td>{{ $book->judul_buku }}</td>
                <td>{{ $book->pengarang }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>
                    <a href="{{ route('library.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('library.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus buku ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Tidak ada data buku.</td>
            </tr>
             @endforelse
</body>
</html>
