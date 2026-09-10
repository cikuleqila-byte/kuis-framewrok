<html>
<head>
    <title>Ubah Informasi</title>
</head>
<body>

    <h2>Ubah Informasi</h2>

    <form method="POST" action="{{ url('/informasi/update') }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $informasi->id }}">

        <table>
            <tr>
                <td>Kategori</td>
                <td>:
                    <select name="kategori_id">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ $informasi->kategori_id == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Judul</td>
                <td>:
                    <input type="text" name="judul" value="{{ $informasi->judul }}">
                </td>
            </tr>

            <tr>
                <td>Ringkasan</td>
                <td>:
                    <textarea name="ringkasan">{{ $informasi->ringkasan }}</textarea>
                </td>
            </tr>

            <tr>
                <td>Isi</td>
                <td>:
                    <textarea name="isi">{{ $informasi->isi }}</textarea>
                </td>
            </tr>

            <tr>
                <td>Sumber</td>
                <td>:
                    <input type="text" name="sumber" value="{{ $informasi->sumber }}">
                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td>:
                    <select name="status">
                        <option value="Aktif" {{ $informasi->status == 'Aktif' ? 'selected' : '' }}>
                            Aktif
                        </option>
                        <option value="Tidak Aktif" {{ $informasi->status == 'Tidak Aktif' ? 'selected' : '' }}>
                            Tidak Aktif
                        </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>

    </form>

</body>
</html>