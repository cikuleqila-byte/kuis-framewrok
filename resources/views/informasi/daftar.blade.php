<html>
<head>
    <title>Daftar Informasi</title>
</head>
<body>

    <h2>Daftar Informasi</h2>
    <a href="{{ url('/informasi/create') }}">Tambah Informasi</a>


    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <table border="1">
        <tr>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Isi</th>
            <th>Sumber</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach ($informasis as $informasi)
        <tr>
            <td>{{ $informasi->kategori->nama }}</td>
            <td>{{ $informasi->judul }}</td>
            <td>{{ $informasi->ringkasan }}</td>
            <td>{{ $informasi->isi }}</td>
            <td>{{ $informasi->sumber }}</td>
            <td>{{ $informasi->status }}</td>

            <td>
                <form method="POST" action="{{ url('/informasi/'.$informasi->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus">
                </form>

                <a href="{{ url('/informasi/'.$informasi->id.'/ubah') }}">
                    [UBAH]
                </a>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>