<html>
<head>
    <title>Daftar Kategori</title>
</head>
<body>

    <h2>Daftar Kategori</h2>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ url('/kategori/create') }}">Tambah Kategori</a>

    <br><br>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($kategoris as $kategori)
        <tr>
            <td>{{ $kategori->nama }}</td>
            <td>{{ $kategori->deskripsi }}</td>
            <td>

                <form method="POST" action="{{ url('/kategori/'.$kategori->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Hapus">
                </form>

                <a href="{{ url('/kategori/'.$kategori->id.'/ubah') }}">
                    [UBAH]
                </a>

            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>