<html>
<head>
    <title>Tambah Informasi</title>
</head>
<body>

    <h2>Tambah Informasi</h2>

    <form method="POST" action="{{ url('/informasi/simpan') }}">
        @csrf

        <table>
            <tr>
                <td>Kategori</td>
                <td>:
                    <select name="kategori_id">
                        <option value="">-- Pilih Kategori --</option>

                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">
                                {{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Judul</td>
                <td>:
                    <input type="text" name="judul">
                </td>
            </tr>

            <tr>
                <td>Ringkasan</td>
                <td>:
                    <textarea name="ringkasan"></textarea>
                </td>
            </tr>

            <tr>
                <td>Isi</td>
                <td>:
                    <textarea name="isi"></textarea>
                </td>
            </tr>

            <tr>
                <td>Sumber</td>
                <td>:
                    <input type="text" name="sumber">
                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td>:
                    <select name="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
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